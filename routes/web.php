<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanBanjirController;
use App\Http\Controllers\SirkulaController;

Route::get('/', [LaporanBanjirController::class, 'form']);

Route::get('/lapor-banjir', [LaporanBanjirController::class, 'form'])
    ->name('laporan.form');
Route::post('/lapor-banjir', [LaporanBanjirController::class, 'proses'])
    ->name('laporan.proses');

Route::get('/sirkula', [SirkulaController::class, 'index'])
    ->name('sirkula.index');
Route::get('/sirkula/bank-sampah', [SirkulaController::class, 'bankSampah'])
    ->name('sirkula.bank-sampah');
Route::get('/sirkula/iuran', [SirkulaController::class, 'iuran'])
    ->name('sirkula.iuran');
Route::get('/sirkula/kebun-komunitas', [SirkulaController::class, 'kebun'])
    ->name('sirkula.kebun');
Route::get('/sirkula/laporan-fasilitas', [SirkulaController::class, 'laporanFasilitas'])
    ->name('sirkula.laporan-fasilitas');