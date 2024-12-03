<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContratacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* Route::get('/register', [RegisterController::class, 'show']);
Route::post('/action-register', [RegisterController::class, 'register']); */

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/home', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
       

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });

    Route::get('/register', 'RegisterController@show')->name('register.show');
    Route::post('/register', 'RegisterController@register')->name('register.perform');
    
    /*Route::get('/empleados', [EmpleadoController::class, 'create'])->name('empleados.create');
    Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');
    */

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('empleado/create-step1', [EmpleadoController::class, 'createStep1'])->name('empleado.create-step1');
    Route::post('empleado/create-step1', [EmpleadoController::class, 'postCreateStep1'])->name('empleado.postCreateStep1');

    Route::get('empleado/create-step2', [EmpleadoController::class, 'createStep2'])->name('empleado.create-step2');
    Route::post('empleado/create-step2', [EmpleadoController::class, 'postCreateStep2'])->name('empleado.postCreateStep2');

    Route::get('empleado/create-step3', [EmpleadoController::class, 'createStep3'])->name('empleado.create-step3');
    Route::post('empleado/create-step3', [EmpleadoController::class, 'postCreateStep3'])->name('empleado.postCreateStep3');

    Route::get('empleado/create-step4', [EmpleadoController::class, 'createStep4'])->name('empleado.create-step4');
    Route::post('empleado/create-step4', [EmpleadoController::class, 'postCreateStep4'])->name('empleado.postCreateStep4');

    Route::get('empleado/index', [EmpleadoController::class, 'index'])->name('empleado.index');
    Route::get('/empleado/{id}/edit', [EmpleadoController::class, 'edit'])->name('empleado.edit');
    Route::put('/empleado/{id}', [EmpleadoController::class, 'update'])->name('empleado.update');
    Route::delete('/empleado/{id}', [EmpleadoController::class, 'destroy'])->name('empleado.destroy');
    
    Route::get('empleado/{id}', [EmpleadoController::class, 'show'])->name('empleado.show');

    Route::get('items/index', [ItemController::class, 'index'])->name('items.index');
    Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
    Route::post('/items', [ItemController::class, 'store'])->name('items.store');

    Route::get('/items/{id}', [ItemController::class, 'show'])->name('items.show');
    Route::get('/items/{id}/edit', [ItemController::class, 'edit'])->name('items.edit');
    Route::put('/items/{id}', [ItemController::class, 'update'])->name('items.update');

    Route::delete('/items/{id}', [ItemController::class, 'destroy'])->name('items.destroy');

    Route::resource('permisos', PermisoController::class);

    Route::resource('files', FileController::class);
    Route::get('files/{id}/edit', [FileController::class, 'edit'])->name('files.edit');
    Route::put('files/{id}', [FileController::class, 'update'])->name('files.update');

    Route::resource('contrataciones', ContratacionController::class);
   

});
