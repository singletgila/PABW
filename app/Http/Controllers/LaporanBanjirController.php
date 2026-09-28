<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanBanjirController extends Controller
{
    public function form()
    {
        return view('laporan');
    }
    public function proses(Request $request)
    {
        $nama = $request->nama;
        $lokasi = $request->lokasi;
        $tinggi = $request->tinggi;

        return view('konfirmasi', compact('nama', 'lokasi', 'tinggi'));
    }
}
