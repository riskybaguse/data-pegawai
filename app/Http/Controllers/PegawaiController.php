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

    public function tambah()
    {
        $jumlah = DB::table('pegawai')->count();
        // menampilkan view tambah
        return view('tambah', ['jumlah_pegawai' => $jumlah]);
    }

    public function store(Request $request)
    {
        // insert data pegawai ke database
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ]);

        // alihkan halaman ke pegawai
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        // menampilkan view edit
        $jumlah = DB::table('pegawai')->count();

        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        // passing data pegawai yang didapat ke view edit
        return view('edit', ['pegawai' => $pegawai], ['jumlah_pegawai' => $jumlah]);
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ]);

        // alihkan halaman ke pegawai
        return redirect('/pegawai');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        // alihkan halaman ke pegawai
        return redirect('/pegawai');
    }
}
