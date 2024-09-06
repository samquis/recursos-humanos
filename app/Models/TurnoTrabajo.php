<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnoTrabajo extends Model
{
    protected $table = 'turno_trabajo';

    protected $fillable = [
        'descripcion'
    ];

    public $timestamps = false;
}
