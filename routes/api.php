<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::post('/insertar',[ProductoController::class,'insertar']);
route::post('/actualizar/{id}',[ProductoController::class,'actualizar']);
route::delete('/delete/{id}',[ProductoController::class,'eliminar']);
route::get('/consulta',[ProductoController::class,'mostrar']);
Route::get('/vbd', [ProductoController::class, 'bd']);

