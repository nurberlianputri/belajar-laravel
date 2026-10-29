<?php

use App\Http\Controllers\BimbelController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BimbelController::class, 'beranda']);
Route::get('/program', [BimbelController::class, 'program']);
Route::get('/pengajar', [BimbelController::class, 'pengajar']);
Route::get('/jadwal', [BimbelController::class, 'jadwal']);
Route::get('/daftar', [BimbelController::class, 'daftar']);
Route::post('/daftar', [BimbelController::class, 'simpanDaftar']);
Route::get('/contact', [BimbelController::class, 'kontak']);