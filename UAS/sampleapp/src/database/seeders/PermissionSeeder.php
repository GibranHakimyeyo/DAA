<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permissions for client
        $clientPermissions = [
            'view_activity',
            'view_any_activity',
        ];

        foreach ($clientPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign permissions to client role
        $clientRole = Role::firstOrCreate(['name' => 'client']);
        $clientRole->givePermissionTo($clientPermissions);

        // Permissions for super_admin
        $adminPermissions = [
            'view_events',
            'manage_events',
        ];

        foreach ($adminPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign permissions to super_admin role
        $adminRole = Role::firstOrCreate(['name' => 'super_admin']);
        $adminRole->givePermissionTo($adminPermissions);
    }
}
