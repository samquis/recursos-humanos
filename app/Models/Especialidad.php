<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidad';

    protected $fillable = [
        'nombre_especialidad'
    ];

    public $timestamps = false;
}
