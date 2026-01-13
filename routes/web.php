<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\SignatureController;

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

Route::controller(SignatureController::class)->group(function () {
    Route::get('/signature/create', 'create')->name('signature.create');
    Route::post('/signature/create', 'store')->name('signature.store');
    Route::get('/signature/search', 'search')->name('signature.search');
    Route::post('/signature/search', 'find')->name('signature.find');
    Route::get('/signature/{unique_link}', 'show')->name('signature.show');
    Route::get('/admin/tanda-tangan-elektronik/download-qr/{nomor}', 'downloadQRCode')->name('signature.download-qr');
});