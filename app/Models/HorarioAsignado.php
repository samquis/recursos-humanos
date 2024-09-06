<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioAsignado extends Model
{
    protected $table = 'horario_asignado';

    protected $fillable = [
        'hora_inicio',
        'hora_fin',
        'empleado_id',
        'turno_id'
    ];

    public $timestamps = false;
}
