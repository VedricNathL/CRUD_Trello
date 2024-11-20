<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\GuruController;
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

Route::get('/', function () {
    return view('home');
});

route::prefix('/absen')->name('absen.')->group(function(){
    Route::get('/create',[AbsenController::class, 'create'])->name('absen.create');
    Route::post('/store',[AbsenController::class, 'store'])->name('absen.store');
    Route::get('/',[AbsenController::class, 'index'])->name('absen.home');
    Route::get('/{id}',[AbsenController::class, 'edit'])->name('absen.edit');
    Route::patch('/{id}',[AbsenController::class, 'update'])->name('absen.update');
    Route::delete('/{id}',[AbsenController::class, 'destroy'])->name('absen.delete');
});
route::prefix('/guru')->name('guru.')->group(function(){
    Route::get('/createGru',[GuruController::class, 'create'])->name('guru.create');
    Route::post('/storeGuru',[GuruController::class, 'store'])->name('guru.store');
    Route::get('/',[GuruController::class, 'index'])->name('guru.home');
    Route::get('guru/{id}',[GuruController::class, 'edit'])->name('guru.edit');
    Route::patch('guru/update/{id}',[GuruController::class, 'update'])->name('guru.update');
    Route::delete('guru/delete/{id}',[GuruController::class, 'destroy'])->name('guru.delete');
});
