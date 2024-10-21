<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';

    protected $fillable = [
        'num_item',
        'descripcion',
        'empleado_id',
        'cargo_empleado_id'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function cargoEmpleado()
    {
        return $this->belongsTo(CargoEmpleado::class, 'cargo_empleado_id');
    }
    public $timestamps = false;
}
