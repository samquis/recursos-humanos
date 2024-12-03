<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    //
    public function show()
    {
        if(Auth::check()){
            return redirect()->route('home.index');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        // Validar las credenciales
        if (!Auth::attempt($credentials)) {
            // Devolver un mensaje claro en caso de error
            return redirect()->back()
                ->withErrors(['email' => 'El correo o la contraseña son incorrectos.'])
                ->withInput($request->only('email'));
        }

        // Si las credenciales son válidas, iniciar sesión
        $user = Auth::user();

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user) 
    {
        return redirect()->route('home.index');
    }
}
