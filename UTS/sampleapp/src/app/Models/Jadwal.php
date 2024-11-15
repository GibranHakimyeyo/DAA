<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id','doctor_name', 'day', 'time', 'start_time', 'end_time', 'room', 'hospital_name'
    ];

    public function dokters()
    {
        return $this->belongsTo(Dokters::class);
    }
}
