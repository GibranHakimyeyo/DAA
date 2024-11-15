<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\component\Routing\Loader\ProtectedPhpFileLoader;

class classroom extends Model
{
    use HasFactory;

    protected $fillable =[
            'name'
    ];
}
