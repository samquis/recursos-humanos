<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    protected $table = 'permiso';

    protected $fillable = [
        'empleado_id',
        'fecha_salida',
        'fecha_ingreso',
        'descripcion'
    ];

    public $timestamps = true;

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}
