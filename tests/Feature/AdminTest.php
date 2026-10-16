<?php

namespace Tests\Feature;

use App\Models\Program;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    private function admin(): User
    {
        $user = User::factory()->create();
        $user->is_admin = true;
        $user->save();

        return $user;
    }

    private function payload(Program $program): array
    {
        return ['program_id' => $program->id, 'nama' => 'Calon Siswa', 'hp' => '081234567890', 'sekolah' => 'SMAN 1 Bandung', 'kelas' => 'XII', 'lokasi' => 'Bandung', 'consent' => '1'];
    }

    public function test_guests_are_redirected_from_protected_admin_routes(): void
    {
        $this->get('/admin')->assertRedirect(route('login'));
        $this->get('/admin/pendaftaran/export')->assertRedirect(route('login'));
        $this->post('/admin/program', [])->assertRedirect(route('login'));
    }

    public function test_only_administrators_are_authorized(): void
    {
        $user = User::factory()->create();
        $this->assertFalse(Gate::forUser($user)->allows('access-admin'));
        $this->assertTrue(Gate::forUser($this->admin())->allows('access-admin'));
        $this->actingAs($user)->get('/admin')->assertForbidden();
        $this->post('/admin/program', [])->assertForbidden();
    }

    public function test_admin_can_login_and_logout(): void
    {
        $admin = $this->admin();
        $this->post('/admin/login', ['email' => $admin->email, 'password' => 'password'])->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticatedAs($admin);
        $this->post('/admin/logout')->assertRedirect(route('login'));
        $this->assertGuest();
    }

    public function test_wrong_password_and_non_admin_login_are_rejected(): void
    {
        $user = User::factory()->create();
        $this->post('/admin/login', ['email' => $user->email, 'password' => 'password'])->assertSessionHasErrors(['email' => 'Email atau kata sandi tidak sesuai.']);
        $admin = $this->admin();
        $this->post('/admin/login', ['email' => $admin->email, 'password' => 'wrong'])->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_login_attempts_are_rate_limited(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->post('/admin/login', ['email' => 'nobody@example.com', 'password' => 'incorrect']);
        }
        $this->post('/admin/login', ['email' => 'nobody@example.com', 'password' => 'incorrect'])->assertTooManyRequests();
    }

    public function test_dashboard_uses_persisted_registration_statistics(): void
    {
        Registration::factory()->create(['name' => 'Siswa Terbaru', 'status' => 'baru']);
        Registration::factory()->create(['status' => 'terdaftar', 'created_at' => now()->subDays(60)]);
        $this->actingAs($this->admin())->get('/admin?days=7')->assertOk()->assertViewHas('total', 2)->assertViewHas('pending', 1)->assertViewHas('enrolled', 1)->assertViewHas('periodCount', 1)->assertSee('Siswa Terbaru');
        $this->get('/admin?days=invalid')->assertOk()->assertViewHas('days', 30);
    }

    public function test_admin_pages_render(): void
    {
        $program = Program::factory()->create();
        $this->actingAs($this->admin());
        foreach (['/admin/pendaftaran', '/admin/program', '/admin/program/create', '/admin/program/'.$program->id.'/edit', '/admin/pengaturan'] as $path) {
            $this->get($path)->assertOk();
        }
    }

    public function test_public_registration_is_saved_without_trusting_status_or_admin_fields(): void
    {
        $program = Program::factory()->create();
        $this->post('/daftar', [...$this->payload($program), 'status' => 'terdaftar', 'admin_notes' => 'injected', 'is_admin' => 1])->assertRedirect(route('daftar'))->assertSessionHas('registration_success');
        $this->assertDatabaseHas('registrations', ['name' => 'Calon Siswa', 'status' => 'baru', 'admin_notes' => null, 'program_id' => $program->id]);
    }

    public function test_public_form_only_lists_active_programs_and_shows_success(): void
    {
        Program::factory()->create(['name' => 'Program Terbuka']);
        Program::factory()->create(['name' => 'Program Tertutup', 'is_active' => false]);
        $this->get('/daftar')->assertOk()->assertSee('Program Terbuka')->assertDontSee('Program Tertutup');
        $this->withSession(['registration_success' => true])->get('/daftar')->assertSee('Pendaftaran berhasil dikirim.');
    }

    public function test_public_registration_requires_valid_fields_consent_and_active_program(): void
    {
        $program = Program::factory()->create(['is_active' => false]);
        $this->post('/daftar', [])->assertSessionHasErrors(['program_id', 'nama', 'hp', 'sekolah', 'kelas', 'lokasi', 'consent']);
        $this->post('/daftar', [...$this->payload($program), 'hp' => 'invalid', 'kelas' => 'invalid', 'lokasi' => 'invalid', 'consent' => 0, 'website' => 'bot'])->assertSessionHasErrors(['program_id', 'hp', 'kelas', 'lokasi', 'consent', 'website']);
        $this->assertDatabaseCount('registrations', 0);
    }

    public function test_registration_search_combines_status_and_location(): void
    {
        Registration::factory()->create(['name' => 'Target Siswa', 'status' => 'baru', 'location' => 'Bandung']);
        Registration::factory()->create(['name' => 'Target Lain', 'status' => 'terdaftar', 'location' => 'Bandung']);
        $this->actingAs($this->admin())->get('/admin/pendaftaran?q=Target&status=baru&location=Bandung')->assertOk()->assertSee('Target Siswa')->assertDontSee('Target Lain');
        $this->get('/admin/pendaftaran?status=invalid')->assertSessionHasErrors('status');
    }

    public function test_admin_can_update_registration_and_invalid_status_is_rejected(): void
    {
        $registration = Registration::factory()->create();
        $this->actingAs($this->admin())->patch(route('admin.registrations.update', $registration), ['status' => 'dihubungi', 'admin_notes' => 'Sudah dikonsultasikan.'])->assertSessionHas('success');
        $this->assertDatabaseHas('registrations', ['id' => $registration->id, 'status' => 'dihubungi', 'admin_notes' => 'Sudah dikonsultasikan.']);
        $this->patch(route('admin.registrations.update', $registration), ['status' => 'invalid'])->assertSessionHasErrors('status');
    }

    public function test_registration_detail_escapes_student_content(): void
    {
        $registration = Registration::factory()->create(['name' => '<script>alert(1)</script>', 'notes' => '<img src=x onerror=alert(2)>']);
        $this->actingAs($this->admin())->get(route('admin.registrations.show', $registration))->assertOk()->assertSee('<script>alert(1)</script>')->assertDontSee('<script>alert(1)</script>', false)->assertDontSee('<img src=x onerror=alert(2)>', false);
    }

    public function test_export_respects_filters_and_neutralizes_spreadsheet_formulas(): void
    {
        Registration::factory()->create(['name' => '=DANGEROUS', 'status' => 'baru']);
        Registration::factory()->create(['name' => 'Excluded Student', 'status' => 'terdaftar']);
        $response = $this->actingAs($this->admin())->get('/admin/pendaftaran/export?status=baru')->assertOk();
        $csv = $response->streamedContent();
        $this->assertStringContainsString("'=DANGEROUS", $csv);
        $this->assertStringNotContainsString('Excluded Student', $csv);
    }

    public function test_admin_can_create_and_update_programs(): void
    {
        $data = ['name' => 'Program Baru', 'category' => 'Arsitektur', 'mode' => 'Online', 'price' => 500000, 'description' => 'Belajar perspektif.', 'is_active' => 1];
        $this->actingAs($this->admin())->post('/admin/program', $data)->assertRedirect(route('admin.programs.index'));
        $this->assertDatabaseHas('programs', ['name' => 'Program Baru', 'price' => 500000]);
        $program = Program::firstOrFail();
        $this->put(route('admin.programs.update', $program), [...$data, 'is_active' => 0])->assertRedirect(route('admin.programs.index'));
        $this->assertFalse($program->fresh()->is_active);
        $this->post('/admin/program', [...$data, 'price' => -1, 'category' => 'invalid'])->assertSessionHasErrors(['price', 'category']);
    }

    public function test_account_settings_require_current_password_and_persist_valid_changes(): void
    {
        $admin = $this->admin();
        $this->actingAs($admin)->patch('/admin/pengaturan', ['name' => 'New Name', 'email' => $admin->email, 'current_password' => 'wrong'])->assertSessionHasErrors('current_password');
        $this->assertNotSame('New Name', $admin->fresh()->name);
        $this->patch('/admin/pengaturan', ['name' => 'New Name', 'email' => $admin->email, 'current_password' => 'password', 'password' => 'NewPassword12345', 'password_confirmation' => 'NewPassword12345'])->assertSessionHas('success');
        $this->assertSame('New Name', $admin->fresh()->name);
        $this->assertTrue(Hash::check('NewPassword12345',$admin->fresh()->password));
    }
}
