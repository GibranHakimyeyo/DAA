<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data contoh ke tabel events
        Event::create([
            'nama_event' => 'Music Festival',
            'jenis_event' => 'Concert',
            'lokasi' => 'Bandung',
            'tanggal' => '2025-05-01',
            'detail_event' => 'w',
        ]);

        Event::create([
            'nama_event' => 'Tech Conference',
            'jenis_event' => 'Conference',
            'lokasi' => 'Jakarta',
            'tanggal' => '2025-06-15',
            'detail_event' => 'w',
        ]);
    }
}

