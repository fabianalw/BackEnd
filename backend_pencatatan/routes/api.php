<?php

use App\Http\Controllers\Api\KelahiranController;
use App\Http\Controllers\Api\PemeriksaanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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


Route::get('pemeriksaan', [PemeriksaanController::class, 'index']);
Route::post('pemeriksaan', [PemeriksaanController::class, 'store']);
Route::put('pemeriksaan/{id}', [PemeriksaanController::class, 'update']);
Route::delete('pemeriksaan/{id}', [PemeriksaanController::class, 'destroy']);
Route::get('pemeriksaan/{id}', [PemeriksaanController::class, 'show']);

Route::apiResource('kelahiran', KelahiranController::class);

// Route::apiResource('pemeriksaan', PemeriksaanController::class);