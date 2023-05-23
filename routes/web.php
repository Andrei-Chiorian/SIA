<?php

use App\Models\Padre;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PadreController;
use App\Http\Controllers\Padre_1Controller;
use App\Http\Controllers\PersonaController;

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
    return view('index');
})->name('index');

////
Route::get('/afiliados/general/cod={cod}/{nom}',[PersonaController::class, 'showAfiliado'])->name('show');
Route::get('/afiliados/general',[PersonaController::class, 'general'])->name('general');
Route::get('/afiliados/general/nuevo-afiliado',[PersonaController::class, 'create'])->name('create');

Route::post('/find',[PersonaController::class, 'find'])->name('find');
Route::post('/findByDNI',[PersonaController::class, 'findByDNI'])->name('find.DNI');

Route::delete('/delete',[PersonaController::class, 'destroy'])->name('delete');

Route::post('/store',[PersonaController::class, 'store'])->name('store');

Route::post('/update',[PersonaController::class, 'update'])->name('update');



////
// Route::get('/',[PersonaController::class, 'showAfiliado'])->name('show');
// Route::get('/afiliados/general',[PersonaController::class, 'general'])->name('general');

// Route::post('/find',[PersonaController::class, 'find'])->name('find');
// Route::post('/findByDNI',[PersonaController::class, 'findByDNI'])->name('find.DNI');

// Route::delete('/delete',[PersonaController::class, 'destroy'])->name('delete');

// Route::post('/store',[PersonaController::class, 'store'])->name('store');

// Route::post('/update',[PersonaController::class, 'update'])->name('update');
