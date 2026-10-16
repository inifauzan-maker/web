<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        foreach (['Intensif SNBP Seni Rupa & Desain', 'Intensif SNBT Seni Rupa & Desain', 'Intensif Seleksi Mandiri', 'Intensif Online Seni Rupa & Desain', 'Blended Learning Seni Rupa & Desain', 'Online Learning Seni Rupa & Desain', 'Intensif Arsitektur', 'Intensif Online Arsitektur', 'Blended Learning Arsitektur', 'Online Learning Arsitektur', 'Program SD & SMP'] as $name) {
            Program::firstOrCreate(['name' => $name], ['category' => str_contains($name, 'Arsitektur') ? 'Arsitektur' : (str_contains($name, 'SD & SMP') ? 'SD & SMP' : 'Seni Rupa & Desain'), 'mode' => str_contains($name, 'Online') ? 'Online' : (str_contains($name, 'Blended') ? 'Blended' : 'Offline / Online'), 'price' => str_contains($name, 'SNBP') || str_contains($name, 'SNBT') ? 9000000 : 0, 'description' => 'Bimbingan menggambar terstruktur bersama pengajar Villa Merah. Hubungi tim kami untuk jadwal dan informasi lengkap.', 'is_active' => true]);
        }
    }
}
