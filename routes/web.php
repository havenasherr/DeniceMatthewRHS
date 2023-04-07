<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('/admin/dashboard');
});

//Route::get('/daftar_mahasiswa',
//'App\Http\Controllers\MahasiswaController@index');

Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);
//Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
//Route::match(['get', 'post'], '/detail_mahasiswa',
//[MahasiswaController::class, 'detail_mhs']);
Route::view('/detail_mahasiswa', 'detail_mahasiswa');
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/cards', [AdminController::class, 'show_cards']);
Route::get('/admin/table', [AdminController::class, 'show_table']);
Route::get('/admin/foto', [AdminController::class, 'show_foto']);
Route::get('/admin/chart', [AdminController::class, 'show_chart']);
Route::get('/admin/about_me', [AdminController::class, 'show_me']);
