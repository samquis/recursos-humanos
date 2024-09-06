<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaPuesto extends Model
{
    protected $table = 'area_puesto';

    protected $fillable = [
        'nombre'
    ];

    public $timestamps = false;
}
