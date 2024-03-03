<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::insert([
            [
                'name' => $name = 'Admin',
                'slug' => Str::slug($name),
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'administrator',
            ], [
                'name' => $name = 'Petugas',
                'slug' => Str::slug($name),
                'email' => 'petugas@example.com',
                'password' => Hash::make('password'),
                'role' => 'petugas',
            ], [
                'name' => $name = 'Masyarakat',
                'slug' => Str::slug($name),
                'email' => 'masyarakat@example.com',
                'password' => Hash::make('password'),
                'telepon' => '081234567890',
            ]
        ]);
    }
}
