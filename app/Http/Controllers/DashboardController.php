<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Item;
use App\Models\Permiso;
use App\Models\User;
use App\Models\Contratacion;

class DashboardController extends Controller
{
    public function index()
    {
        // Consultar el número total de empleados
        $totalEmpleados = Empleado::count();
        
        // Consultar el número total de ítems
        $totalItems = Item::count();
        
        // Consultar el número total de permisos
        $totalPermisos = Permiso::count();
        
        // Consultar el número total de usuarios
        $totalUsers = User::count();

         // Consultar el número total de contrataciones temporales
         $totalContratacionesTemporales = Contratacion::where('tipo_contrato', 'temporal')->count();
        
        // Pasar los datos a la vista
        return view('dashboard.index', compact('totalEmpleados', 'totalItems', 'totalPermisos', 'totalUsers','totalContratacionesTemporales'));
    }
}

