<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Dokter extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'dokters'; // Table name for Dokter model
    
    // Define which attributes are mass assignable
    protected $fillable = [
        'name',
        'email',
        'password',
        'specialization',
        'contact_info',
        'gender',
        'address',
    ];

    // Define which attributes should be hidden (for example, password and remember token)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Define casting for any attributes
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Optional: Define any relationships, for example, if a Dokter has many schedules
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}

