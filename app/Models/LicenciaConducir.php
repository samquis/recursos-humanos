<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenciaConducir extends Model
{
    protected $table = 'licencia_conducir';

    protected $fillable = [
        'tipo_vehiculo',
        'numero_licencia',
        'fecha_expedicion',
        'fecha_vencimiento',
        'categoria'
    ];
    
    public $timestamps = false;
}
