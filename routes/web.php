<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

// route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::delete('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
