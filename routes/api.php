<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AlumnosController;
use App\Http\Controllers\API\GruposController;

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

Route::apiResource('alumnos', AlumnosController::class)->only(['index']);
Route::get('alumnos/{matricula}',[AlumnosController::class, 'show']);

Route::apiResource('grupos', GruposController::class)->only(['index']);
