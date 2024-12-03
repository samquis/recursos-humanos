<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contratacion;

class ContratacionController extends Controller
{
    public function index()
    {
        $contratacionesTemporales = Contratacion::where('tipo_contrato', 'temporal')->paginate(1);
        $contratacionesIndefinidas = Contratacion::where('tipo_contrato', 'indefinido')->paginate(1);

        return view('contrataciones.index', compact('contratacionesTemporales', 'contratacionesIndefinidas'));
    }
}
