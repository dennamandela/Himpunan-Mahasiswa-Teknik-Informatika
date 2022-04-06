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
use App\Http\Controllers\WebAppController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\GaleriController;


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


Route::get('/dashboard', [AdminController::class, 'index'])->middleware('admin');
Route::get('admin/profile', [AdminController::class, 'profile'])->middleware('admin');
Route::put('admin/profile/update/{id}', [AdminController::class, 'update']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/prosesregister',[AuthController::class, 'postregister']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'proseslogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::put('/profile/ubah-password', [AuthController::class, 'ubahPassword']);

//data untuk aspirasi
Route::get('/admin/aspirasi', [AspirasiController::class, 'index'])->middleware('admin');
Route::get('/admin/aspirasi/tambah', [AspirasiController::class, 'tambah']);
Route::post('/admin/aspirasi/post', [AspirasiController::class, 'post']);
Route::get('/admin/aspirasi/edit/{id}', [AspirasiController::class, 'edit']);
Route::put('/admin/aspirasi/update/{id}', [AspirasiController::class, 'update']);
Route::get('/admin/aspirasi/hapus/{id}', [AspirasiController::class, 'hapus']);

//data untuk aspirasi masyarakat

Route::get('/admin/aspirasi-masyarakat', [AspirasiController::class, 'aspirasiMasyarakat'])->middleware('admin');
Route::get('/admin/aspirasi-masyarakat/hapus/{id}', [AspirasiController::class, 'delete']);

/** ------------------------- Kategori Berita -------------------------------- */
Route::get('/writer/kategori/', [KategoriController::class, 'index']);
Route::get('/writer/kategori/tambah-data', [KategoriController::class, 'tambah']);
Route::post('/writer/kategori/proses-tambah', [KategoriController::class, 'prosesTambah']);
Route::get('/writer/kategori/edit-kategori/{id}', [KategoriController::class, 'editKategori']);
Route::put('/writer/kategori/update-kategori/{id}', [KategoriController::class, 'updateKategori']);
Route::get('/writer/kategori/hapus-kategori/{id}', [KategoriController::class, 'hapusKategori']);


//data untuk berita
Route::get('/writer/berita', [BeritaController::class, 'index'])->middleware('admin');
Route::get('/writer/berita/create', [BeritaController::class, 'tambah']);
Route::post('/writer/berita/store', [BeritaController::class, 'store']);
Route::get('/writer/berita/edit/{id}', [BeritaController::class, 'edit']);
Route::put('/writer/berita/update/{id}', [BeritaController::class, 'update']);
Route::get('/writer/berita/hapus/{id}', [BeritaController::class, 'hapus']);

/** ------------------------- Struktur Organisasi -------------------------------- */

Route::resource('/struktur', StrukturController::class)->middleware('admin');

/** ------------------------- Visi & Misi -------------------------------- */

Route::resource('/admin/visimisi', VisiMisiController::class)->middleware('admin');

/** ------------------------------------- Agenda ----------------------------------------- */

Route::get('/admin/agenda', [AgendaController::class, 'index'])->middleware('admin');
Route::post('/admin/agendaAjax', [AgendaController::class, 'post']);

/** ------------------------------------- Highlight Kegiatan ----------------------------------------- */

Route::resource('/highlight', KegiatanController::class)->middleware('admin');

/** ------------------------------------- Galeri HIMATIF ----------------------------------------- */

Route::get('/admin/galeri', [GaleriController::class, 'index'])->middleware('admin');
Route::get('/admin/galeri/create', [GaleriController::class, 'create']);
Route::post('/admin/galeri/post', [GaleriController::class, 'post']);
Route::get('/admin/galeri/edit/{id}', [GaleriController::class, 'edit']);
Route::put('/admin/galeri/update/{id}', [GaleriController::class, 'update']);
Route::get('/admin/galeri/delete/{id}', [GaleriController::class, 'destroy']);


/** ------------------------------------- Anggota ----------------------------------------- */

Route::get('/admin/anggota', [AnggotaController::class, 'index'])->middleware('admin');
Route::get('/admin/anggota/create', [AnggotaController::class, 'create']);
Route::post('/admin/anggota/post', [AnggotaController::class, 'post']);
Route::get('/admin/anggota/edit/{id}', [AnggotaController::class, 'edit']);
Route::put('/admin/anggota/update/{id}', [AnggotaController::class, 'update']);
Route::get('/admin/anggota/delete/{id}', [AnggotaController::class, 'destroy']);

/** ------------------------------------- User ----------------------------------------- */
Route::get('/anggota/home', [UserController::class, 'index'])->middleware('anggota');
Route::get('/anggota/profil/', [UserController::class, 'editProfil'])->middleware('anggota');
Route::put('/anggota/profil/{id}', [UserController::class, 'updateProfil']);
Route::get('/anggota/aspirasi', [UserController::class, 'showAspirasi'])->middleware('anggota');
Route::get('/anggota/aspirasi/create', [UserController::class, 'createAspirasi']);
Route::post('/anggota/aspirasi/post', [UserController::class, 'postAspirasi']);
Route::get('/anggota/aspirasi/edit/{id}', [UserController::class, 'editAspirasi']);
Route::put('/anggota/aspirasi/update/{id}', [UserController::class, 'updateAspirasi']);
Route::get('/anggota/aspirasi/delete/{id}', [UserController::class, 'deleteAspirasi']);
Route::get('/anggota/reset-password', [UserController::class, 'resetPassword'])->middleware('anggota');
Route::put('/anggota/ubah-password', [UserController::class, 'ubahPassword']);

/** ------------------------------------- Web HIMATIF ----------------------------------------- */

Route::get('/', [WebAppController::class, 'home']);
Route::get('/profil', [WebAppController::class, 'profile']);
Route::get('/aspirasi', [WebAppController::class, 'aspiration']);
Route::post('/aspirasi/post', [WebAppController::class, 'createAspirasi']);
Route::get('/berita', [WebAppController::class, 'berita']);
Route::get('/berita/detail/{id}', [WebAppController::class, 'showDetail']);
Route::get('/kegiatan', [WebAppController::class, 'kegiatan']);
Route::get('/kegiatan/detail-kegiatan/{id}', [WebAppController::class, 'detailKegiatan']);
Route::get('/galeri', [WebAppController::class, 'album']);
Route::get('/agenda', [WebAppController::class, 'agenda']);

?>

