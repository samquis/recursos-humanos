<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratacion extends Model
{
    protected $table = 'contratacion';

    protected $fillable = [
        'tipo_contrato',
        'fecha_inicio',
        'fecha_fin',
        'empleado_id'
    ];

    public $timestamps = false;
}