<?php

use App\Http\Controllers\QrController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QrController::class, 'index'])->name('qr.index');
Route::post('/qr/show', [QrController::class, 'show'])->name('qr.show');
Route::post('/qr/download', [QrController::class, 'downloadPdf'])->name('qr.downloadPdf');
