<?php

use App\Models\Padre;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PadreController;
use App\Http\Controllers\SocioController;
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

Route::post('/find/persona',[PersonaController::class, 'find'])->name('find');

Route::delete('/delete/persona',[PersonaController::class, 'destroy'])->name('delete');

Route::post('/store/persona',[PersonaController::class, 'store'])->name('store');

Route::post('/update/persona',[PersonaController::class, 'update'])->name('update');


/////
Route::get('/afiliados/socios',[SocioController::class, 'socios'])->name('socios');
Route::get('/afiliados/socios/{cod}',[SocioController::class, 'show'])->name('socio.show');
Route::get('/afiliados/socios/nuevo-socio',[SocioController::class, 'create'])->name('create.socio');

Route::post('/find/socio',[SocioController::class, 'find'])->name('find.socio');

Route::delete('/delete/socio',[SocioController::class, 'destroy'])->name('delete.socio');

Route::post('/store/socio',[SocioController::class, 'store'])->name('store.socio');



////
