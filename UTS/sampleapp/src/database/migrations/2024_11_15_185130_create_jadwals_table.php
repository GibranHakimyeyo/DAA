<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            // Menggunakan foreign key yang merujuk ke tabel dokters
            $table->foreignId('doctor_id')->constrained('dokters')->onDelete('cascade');
            $table->string('doctor_name');
            $table->string('day');
            $table->string('time');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('room');
            $table->string('hospital_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
