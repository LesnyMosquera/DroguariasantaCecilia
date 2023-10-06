<?php

use App\Livewire\Usuarios\Clientes;
use Illuminate\Support\Facades\Route;
use App\Livewire\Medicamentos\Laboratorio;
use App\Livewire\Medicamentos\CreateLaboratorio;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::view('/cliente', 'drogueria.usuarios.clientes.index');
route::get('clien', Clientes::class);
