<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controllers\BaseController::class, 'getIndex']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [Controllers\DashboardController::class, 'getIndex'])->name('dashboard');
    Route::get('/admin_items', [Controllers\DashboardController::class, 'getIndex'])->name('admin_items');
});


Route::get('/form', [Controllers\BaseController::class, 'getUrl']);
Route::get('contact_form', [Controllers\ContactController::class, 'getContact']);
//default url always in end
Route::get('/{url}', [Controllers\MaintextController::class, 'getIndex']);
