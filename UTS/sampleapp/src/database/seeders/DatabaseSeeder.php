<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   

        $this->callSeeders();
        $this->seedUsers();
        
        // User::factory(10)->create();
    }

    private function callSeeders(): void
    {
        $this->call([
            RoleSeeder::class, // RoleSeeder akan membuat role yang dibutuhkan
            PermissionSeeder::class,
            DokterSeeder::class,
            JadwalSeeder::class,
        ]);
    }

    private function seedUsers(): void
    {
        // Membuat user Admin jika belum ada
        if (!User::where('email', 'admin@admin.com')->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        if (!User::where('email', 'dokter@admin.com')->exists()) {
            $dokter = User::create([
                'name' => 'Dokter',
                'email' => 'dokter@admin.com',
                'password' => bcrypt('password'),
            ]);
            $dokter->assignRole('Dokter');
        }

        if (!User::where('email', 'pasien@admin.com')->exists()) {
            $pasien = User::create([
                'name' => 'Pasien',
                'email' => 'pasien@admin.com',
                'password' => bcrypt('password'),
            ]);
            $pasien->assignRole('Pasien');
        }
    }
}
