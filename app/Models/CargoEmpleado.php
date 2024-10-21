<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoEmpleado extends Model
{
    protected $table = 'cargo_empleado';

    protected $fillable = [
        'cargo',
        'area_puesto_id'
    ];

    
    public $timestamps = false;
}
