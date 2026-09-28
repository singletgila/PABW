<?php

namespace App\Http\Controllers;

class SirkulaController extends Controller
{
    public function index()
    {
        return view('sirkula.index');
    }

    public function bankSampah()
    {
        return view('sirkula.bank-sampah');
    }

    public function iuran()
    {
        return view('sirkula.iuran');
    }

    public function kebun()
    {
        return view('sirkula.kebun-komunitas');
    }

    public function laporanFasilitas()
    {
        return view('sirkula.laporan-fasilitas');
    }
}