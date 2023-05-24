<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OperatorController;
use Illuminate\Support\Facades\Route;

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


Route::middleware('web')->group(function(){
    Route::controller(CustomerController::class)->group(function(){
        // Route::get('/','index');
    });
    Route::controller(AuthController::class)->group(function(){
        Route::get('/','index')->middleware('guest');
        Route::post('/login/auth','Authentication')->middleware('guest');
    });

    Route::controller(OperatorController::class)->group(function(){
        Route::get('/berandaAdmin','index')->name('berandaOperator')->middleware('auth');
        Route::get('/kelolaData/PemeriksaanSemple','tampilKelolaPemeriksaan')->middleware('auth');
        Route::get('/tambah/PemeriksaanSemple','tambahPemeriksaaanSemple')->middleware('auth');
        Route::get('/edit/PemeriksaanSemple/{id}','editData')->middleware('auth');
        Route::post('/update/formulir/pemeriksaan/{id}','updateData')->middleware('auth');
        Route::post('/tambah/formulir/pemeriksaan','created')->middleware('auth');
    });
});
