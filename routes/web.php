<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositosController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PeriodosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ArticulosController;


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
Route::get('/categorias', function () {
    return view('categorias');
});
Route::get('/prueba', function () {
    return view('prueba');
});
Route::get('/depositos', function () {
    return view('depositos');
});
Route::get('/unverified-email', function () {
    return view('unverified-email');
});
Route::get('/unverified-account', function () {
    return view('unverified-account');
});
Route::get('/reset-password', function () {
    return view('resetpass');
});

//Agrupación de rutas para redireccionar a los usuarios logeados
Route::group(['middleware' => 'guest:web2'], function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    
    Route::get('/registrar', function () {
        return view('auth.registrar');
    });
});

Route::name('publicar')->group(function(){
    Route::get('/categoria-select', function () {
        return view('publicar.categoria');
    });
    Route::get('/publicar/descripcion', function () {
        return view('publicar.descripcion');
    });
    Route::get('/publicar/status', function () {
        return view('publicar.other-info');
    });
    Route::get('/publicar/imagenes', function () {
        return view('publicar.imagenes');
    });
});
Route::get('/publicar', function () {
    return view('publicar');
});


Route::get('getDepositos', [DepositosController::class, 'index']);
//rutas marcas
Route::post('addMarcas/', [MarcasController::class, 'store']);
Route::get('getMarcas/{filtro}', [MarcasController::class, 'index']);
Route::put('updateMarcas/', [MarcasController::class, 'update']);
//rutas periodos
Route::post('addPeriodos/', [PeriodosController::class, 'store']);
Route::post('getPeriodos/', [PeriodosController::class, 'index']);
Route::post('updatePeriodos/', [PeriodosController::class, 'update']);
//rutas categorias
Route::post('addCategorias/', [CategoriasController::class, 'store']);
Route::get('getCategorias/{filtro}', [CategoriasController::class, 'index']);
Route::put('updateCategorias/', [CategoriasController::class, 'update']);

//api login
Route::post('api/loginCliente', [LoginController::class, 'login']);
Route::get('api/estadoVerificado', [LoginController::class, 'estadoVerificado']);
Route::post('api/resendVerification', [LoginController::class, 'resendVerification']);
Route::post('api/resetPassword', [LoginController::class, 'resetPassword']);
// api registrar
Route::post('api/registrar', [UsersController::class, 'store']);

//rutas publicas
Route::get('getArticulos', [ArticulosController::class, 'index']);
Route::get('searchArticle/{busqueda}/{marca}', [ArticulosController::class, 'searchArticle']);
Route::get('itemDetails/{clave}', [ArticulosController::class, 'itemDetails']);
Route::get('categoria/itemByCategory/{categoria}/{marca}', [ArticulosController::class, 'itemByCategory']);
Route::get('getOpiniones/{clave}/{tipo}/{status}', [ArticulosController::class, 'getOpiniones']);

//rutas publicas (retornas vistas)
Route::get('categoria/{filtro}', [ArticulosController::class, 'viewItemByCategory']);
Route::get('item-details/{clave}', [ArticulosController::class, 'viewItemDetails']);
Route::get('search/{busqueda}', [ArticulosController::class, 'viewSearchArticle']);

