<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Dummy Admin Operasional
        User::updateOrCreate(
            ['email' => 'admin@cattaleya.id'],
            [
                'name' => 'Admin Operasional Studio',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );

        // 2. Akun Dummy Owner Bisnis
        User::updateOrCreate(
            ['email' => 'owner@cattaleya.id'],
            [
                'name' => 'Owner Bisnis Cattaleya',
                'password' => Hash::make('password123'),
                'role' => 'owner',
                'email_verified_at' => now(),
            ]
        );
    }
}
