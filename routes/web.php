<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\DownloadController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/fungsionaris', [HomeController::class, 'fungsio']);
Route::get('/programKerja', [HomeController::class, 'proker']);
Route::get('/aspirasi', [AspirasiController::class, 'aspirasi']);

Route::controller(DownloadController::class)->group(function () {
    Route::get('/admin/notulensi-monev-download/{id}', 'downloadNotulensi')->name('notulensi.download');
});