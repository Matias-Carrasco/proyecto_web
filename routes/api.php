<?php

use App\Http\Controllers\StockCdController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CentroDistribucionController;
use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\MedicamentoController;
use App\Models\medicamento;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/stock', [CentroDistribucionController::class, 'stock']);

Route::resource('centrodistribucion',CentroDistribucionController::class);

Route::resource('ingreso', IngresoController::class);


Route::prefix('/medicamento')->group(function () use ($router) {
    $router->post('/update', [MedicamentoController::class, 'update']);
});
Route::resource('medicamento', MedicamentoController::class);


Route::prefix('/farmacia')->group(function () use ($router) {
    $router->post('/update', [FarmaciaController::class, 'update']);
});
Route::resource('farmacia', FarmaciaController::class);

Route::prefix('/centrodistribucion')->group(function () use ($router) {
    $router->post('/update', [CentroDistribucionController::class, 'update']);
});
Route::resource('centrodistribucion', CentroDistribucionController::class);