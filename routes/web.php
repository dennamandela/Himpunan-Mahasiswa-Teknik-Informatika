<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\BeritaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', [MenuController::class, 'beranda']);

//data untuk aspirasi
Route::get('/aspirasi', [AspirasiController::class, 'index']);
Route::get('/aspirasi/tambah', [AspirasiController::class, 'tambah']);
Route::post('/aspirasi/post', [AspirasiController::class, 'post']);
Route::get('/aspirasi/edit/{id}', [AspirasiController::class, 'edit']);
Route::put('/aspirasi/update/{id}', [AspirasiController::class, 'update']);
Route::get('/aspirasi/hapus/{id}', [AspirasiController::class, 'hapus']);

//data untuk berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/create', [BeritaController::class, 'tambah'])->name('tambah');
Route::post('/berita/store', [BeritaController::class, 'store']);
