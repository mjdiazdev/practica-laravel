<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReporteContableController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/edit/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/edit/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::get('/reporte/cliente', [ClienteController::class, 'clientePDF']);

Route::get('/reporte/libro-diario', [ReporteContableController::class, 'libroDiarioPDF']);
