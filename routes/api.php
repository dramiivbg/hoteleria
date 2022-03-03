<?php

use App\Http\Controllers\CalificacioneController;
use App\Http\Controllers\HabitacioneController;
use App\Http\Controllers\HoteleController;
use App\Http\Controllers\PerfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


    
Route::resource('usuario', UserController::class);
Route::resource('hotel', HoteleController::class);
Route::resource('habitacion', HabitacioneController::class);
Route::resource('calificacion', CalificacioneController::class);
Route::resource('perfil', PerfileController::class);

