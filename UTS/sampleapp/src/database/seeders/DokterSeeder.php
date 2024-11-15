<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dokter;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::create([
            'name' => 'Dr. Agus',
            'specialization' => 'Cardiologist',
            'contact_info' => '123-456-7890',
            'gender' => 'Male',
            'address' => 'jln matraman Jakarta',
        ]);

        Dokter::create([
            'name' => 'Dr. Putri',
            'specialization' => 'Dermatologist',
            'contact_info' => '098-765-4321',
            'gender' => 'Female',
            'address' => 'Jln begal Priok Jakarta',
        ]);
    }
}
