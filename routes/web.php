<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

// route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);