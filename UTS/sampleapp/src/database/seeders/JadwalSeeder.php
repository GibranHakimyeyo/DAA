<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;
use App\Models\Dokter; // Make sure to import the Dokter model

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve the doctor with ID 1 (or any other ID as needed)
        $dokter1 = Dokter::find(1);
        $dokter2 = Dokter::find(2);

        if ($dokter1 && $dokter2) {
            Jadwal::create([
                'doctor_id' => $dokter1->id,  
                'doctor_name' => $dokter1->name,  // Use the doctor's name
                'day' => 'Monday',
                'time' => '9:00 AM - 12:00 PM',
                'start_time' => '09:00:00',
                'end_time' => '12:00:00',
                'room' => '101',
                'hospital_name' => 'RSUD Tangerang',
            ]);

            Jadwal::create([
                'doctor_id' => $dokter2->id,  
                'doctor_name' => $dokter2->name,  // Use the doctor's name
                'day' => 'Tuesday',
                'time' => '1:00 PM - 4:00 PM',
                'start_time' => '13:00:00',
                'end_time' => '16:00:00',
                'room' => '202',
                'hospital_name' => 'RSUD Jakarta',
            ]);
        }
    }
}
