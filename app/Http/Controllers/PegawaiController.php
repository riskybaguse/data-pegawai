<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        // mengambil data pegawai dari database
        $pegawai = DB::table('pegawai')->get();

        // menampilkan data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }
}
