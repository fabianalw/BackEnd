<?php

use App\Http\Controllers\API\datakelahiranController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Hash;




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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('/login');
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);


Route::get('data_kelahiran', [datakelahiranController::class, 'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return  $request->user();
});
