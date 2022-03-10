<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\AnggotaController;


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
    return view('admin.dashboard');
})->middleware('auth');

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/profile', [AdminController::class, 'profile']);
Route::put('/profile/update/{id}', [AdminController::class, 'update']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/prosesregister',[AuthController::class, 'postregister']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'proseslogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::put('/profile/ubah-password', [AuthController::class, 'ubahPassword']);

//data untuk aspirasi
Route::get('/aspirasi', [AspirasiController::class, 'index'])->middleware('admin');
Route::get('/aspirasi/tambah', [AspirasiController::class, 'tambah']);
Route::post('/aspirasi/post', [AspirasiController::class, 'post']);
Route::get('/aspirasi/edit/{id}', [AspirasiController::class, 'edit']);
Route::put('/aspirasi/update/{id}', [AspirasiController::class, 'update']);
Route::get('/aspirasi/hapus/{id}', [AspirasiController::class, 'hapus']);

//data untuk berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/create', [BeritaController::class, 'tambah'])->name('create');
Route::post('/berita/store', [BeritaController::class, 'store']);
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit']);
Route::put('/berita/update/{id}', [BeritaController::class, 'update']);
Route::get('/berita/hapus/{id}', [BeritaController::class, 'hapus']);

/** ------------------------- Struktur Organisasi -------------------------------- */

Route::resource('/struktur', StrukturController::class)->middleware('admin');

/** ------------------------- Visi & Misi -------------------------------- */

Route::resource('/visimisi', VisiMisiController::class)->middleware('admin');

/** ------------------------------------- Agenda ----------------------------------------- */

Route::get('/agenda', [AgendaController::class, 'index'])->middleware('admin');
Route::post('/agendaAjax', [AgendaController::class, 'post']);

/** ------------------------------------- Highlight Kegiatan ----------------------------------------- */

Route::resource('/highlight', KegiatanController::class)->middleware('admin');

/** ------------------------------------- Anggota ----------------------------------------- */

Route::get('/anggota', [AnggotaController::class, 'index'])->middleware('admin');
Route::get('/anggota/create', [AnggotaController::class, 'create']);

/** ------------------------------------- User ----------------------------------------- */
Route::get('/anggota/home', [UserController::class, 'index'])->middleware('auth');
Route::get('/anggota/profil/', [UserController::class, 'editProfil']);
Route::put('/anggota/profil/{id}', [UserController::class, 'updateProfil']);
Route::get('/anggota/aspirasi', [UserController::class, 'createAspirasi']);

?>

