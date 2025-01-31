<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Database\Seeders\EventSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Run Role and Permission Seeders
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
            EventSeeder::class,
        ]);

        // Create the super_admin user
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        // Assign super_admin role
        $admin->assignRole('super_admin');

        // Create the client user
        $client = User::factory()->create([
            'name' => 'Client User',
            'email' => 'client@client.com',
            'password' => bcrypt('password'),
        ]);

        // Assign client role
        $client->assignRole('client');
    }
}
