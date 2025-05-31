<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

// route CRUD index
Route::get('/pegawai', [PegawaiController::class, 'index']);
// route CRUD tambah
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
// route CRUD store buat tambah data
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
// route CRUD edit data
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
// route CRUD update data
Route::put('/pegawai/update', [PegawaiController::class, 'update']);
// route CRUD hapus data
Route::delete('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
