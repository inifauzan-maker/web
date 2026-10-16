<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateAdmin extends Command
{
    protected $signature = 'admin:create {email} {--name=Administrator}';

    protected $description = 'Create an administrator with a generated temporary password';

    public function handle(): int
    {
        $email = (string) $this->argument('email');
        if (! filter_var($email, FILTER_VALIDATE_EMAIL) || User::where('email', $email)->exists()) {
            $this->error('Gunakan email valid yang belum terdaftar.');

            return self::FAILURE;
        }
        $password = Str::password(18);
        $user = new User(['name' => $this->option('name'), 'email' => $email, 'password' => $password]);
        $user->is_admin = true;
        $user->save();
        $this->info('Email: '.$email);
        $this->info('Kata sandi sementara: '.$password);

        return self::SUCCESS;
    }
}
