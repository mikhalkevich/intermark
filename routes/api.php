<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::middleware('auth:sanctum')->group(function (){
    Route::post('logout', [Controllers\AuthController::class, 'logout']);
    Route::get('profile', [Controllers\AuthController::class, 'profile']);
    Route::resource('items', Controllers\ItemController::class);
});
Route::get('public/items',[Controllers\ItemController::class, 'getMainPublic']);
Route::get('public/country/{alpha2}',[Controllers\CountryController::class, 'getAlpha2']);
Route::post('register', [Controllers\AuthController::class, 'register']);
Route::post('login', [Controllers\AuthController::class, 'login']);

