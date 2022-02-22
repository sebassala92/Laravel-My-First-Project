<?php

use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\PruebasController;
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

Route::get(
    '/estudiantes',
    [EstudiantesController::class, 'store']
);

Route::post(
    '/pruebas/{num_1}/{num_2}',
    [PruebasController::class, 'store']
);