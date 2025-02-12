<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\DownloadController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/fungsionaris', 'fungsio')->name('fungsionaris');
    Route::get('/program-kerja', 'proker')->name('proker');
});

Route::controller(AspirasiController::class)->group(function () {
    Route::get('/aspirasi', 'index')->name('aspirasi.index');
    Route::post('/aspirasi', 'store')->name('aspirasi.store');
});

Route::controller(DownloadController::class)->group(function () {
    Route::get('/admin/notulensi-monev-download/{id}', 'downloadNotulensi')->name('notulensi.download');
});