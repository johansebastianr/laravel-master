<?php

use App\Http\Controllers\AmigoController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\PrimoController;
use App\Http\Controllers\TallerController;
use App\Http\Controllers\ProController;
use App\Http\Controllers\PromedioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ZapatosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/curso',[PrimoController::class,'create']);

Route::post('/curso',[PrimoController::class,'store'])->name('curso.store');

Route::get('/promedioNota',[PromedioController::class,'formularioPromedio']);

Route::post('/promedioNota',[PromedioController::class,'procedimiento'])->name('promedio.store');

Route::get('/numeroAmigo',[AmigoController::class,'formularioAmigo']);

Route::post('/numeroAmigo',[AmigoController::class,'calculo'])->name('amigo.store');

Route::get('/frmproducto',[ProductController::class,'formularioProducto']);

Route::post('/frmproducto',[ProductController::class,'productoStore'])->name('product.store');

Route::get('/mascotas',[MascotasController::class,'formularioMascotas']);

Route::post('/mascotas',[MascotasController::class,'productMascotas'])->name('mascotas.store');

Route::get('/zapatos',[ZapatosController::class,'formularioZapatos']);

Route::post('/zapatos',[ZapatosController::class,'productZapatos'])->name('zapatos.store');

























// Route::get('/curso/primo/{data}', [TallerController::class,'verificarPrimo']);

// Route::get('/curso/amigos/{data1}/{data2}', [TallerController::class,'verificarAmigos']);

Route::get('/curso',[PrimoController::class,'create']);

Route::post('/curso',[PrimoController::class,'store'])->name('curso.store');


Route::get('/promedioNota',[PromedioController::class,'formularioPromedio']);

Route::post('/promedioNota',[PromedioController::class,'procedimiento'])->name('promedio.store');


Route::get('/numeroAmigo', [AmigoController::class, 'formularioAmigo']);

Route::post('/numeroAmigo', [AmigoController::class, 'calculo'])->name('amigo.store');
