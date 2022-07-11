<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositosController;
use App\Http\Controllers\MarcasController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/marcas', function () {
    return view('marcas');
});
Route::get('/periodos', function () {
    return view('periodos');
});
Route::get('/quejas', function () {
    return view('quejas');
});
Route::get('/rentas', function () {
    return view('renta');
});
Route::get('getDepositos', [DepositosController::class, 'index']);
Route::post('addMarcas/', [MarcasController::class, 'store']);
Route::put('updateMarcas/', [MarcasController::class, 'update']);
Route::get('getMarcas/{filtro}', [MarcasController::class, 'index']);
