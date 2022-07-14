<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pasien', [App\Http\Controllers\PasienController::class, 'index']);
Route::get('/pasien/create', [App\Http\Controllers\PasienController::class, 'create']);
Route::post('/pasien', [App\Http\Controllers\PasienController::class, 'store']);
Route::get('/pasien/{id}/edit', [App\Http\Controllers\PasienController::class, 'edit']);
Route::patch('/pasien/{id}', [App\Http\Controllers\PasienController::class, 'update']);
Route::delete('/pasien/{id}', [App\Http\Controllers\PasienController::class, 'destroy']);
