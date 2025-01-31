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
        // Create permissions for pasien
        $pasienPermissions = [
            'view_jadwal',
            'view_any_jadwal',
            
        ];

        foreach ($pasienPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign permissions to pasien role
        $pasienRole = Role::firstOrCreate(['name' => 'pasien']);
        $pasienRole->givePermissionTo($pasienPermissions);

        // Create permissions for dokter
        $dokterPermissions = [
            'view_jadwal',
            'view_any_jadwal',
            'create_jadwal',
            'update_jadwal',
            'delete_jadwal',
        ];

        foreach ($dokterPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign permissions to dokter role
        $dokterRole = Role::firstOrCreate(['name' => 'dokter']);
        $dokterRole->givePermissionTo($dokterPermissions);
    }
}
