<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'nama_event', 
        'jenis_event', 
        'lokasi', 
        'tanggal',  
        'detail_event',
    ];
}
