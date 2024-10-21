<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleado';

    protected $fillable = [
        'ci',
        'nombre',
        'segundo_nombre',
        'apellido_p',
        'apellido_m',
        'fecha_nacimiento',
        'estado_civil',
        'telefono',
        'direccion1',
        'direccion2',
        'imagen',
        'genero',
        'tipo_sangre_id',
        'departamento_id',
        'distrito_id',
        'area_puesto_id',
        'cargo_empleado_id',
        'nivel_estudio_id',
        'especialidad_id',
        'fecha_contratado',
        'turno_id'
    ];

    public function item()
    {
        return $this->hasOne(Item::class, 'empleado_id', 'id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function contratacion()
    {
        return $this->hasOne(Contratacion::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class, 'empleado_id');
    }

    public $timestamps = false;
}
