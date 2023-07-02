<?php

use App\Http\Controllers\Api\KelahiranController;
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


// Route::get('kelahiran', [KelahiranController::class, 'index']);
// Route::post('kelahiran', [KelahiranController::class, 'store']);
// Route::put('kelahiran/{id}', [KelahiranController::class, 'update']);
// Route::delete('kelahiran/{id}', [KelahiranController::class, 'destroy']);
// Route::get('kelahiran/{id}', [KelahiranController::class, 'show']);

Route::apiResource('kelahiran', KelahiranController::class);