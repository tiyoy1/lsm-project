<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Seed an admin user (typically for local development).
     */
    public function run(): void
    {
        $email = (string) env('ADMIN_EMAIL', '');
        $password = (string) env('ADMIN_PASSWORD', '');
        $name = (string) env('ADMIN_NAME', 'Admin');

        if (($email === '' || $password === '') && app()->environment('local')) {
            $email = $email !== '' ? $email : 'admin@example.com';
            $password = $password !== '' ? $password : 'Admin12345!';
        }

        if ($email === '' || $password === '') {
            return;
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make($password),
                'is_admin' => true,
            ]
        );
    }
}
