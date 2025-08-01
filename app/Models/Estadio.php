<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadio extends Model
{
    /** @use HasFactory<\Database\Factories\EstadioFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

}
