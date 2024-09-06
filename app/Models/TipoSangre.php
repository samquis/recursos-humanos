<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSangre extends Model
{
    protected $table = 'tipo_sangre';

    protected $fillable = [
        'tipo'
    ];

    public $timestamps = false;
}
