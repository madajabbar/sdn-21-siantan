<?php

use App\Http\Controllers\admin\BeritaController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DataAlumniController;
use App\Http\Controllers\admin\DataPelajarController;
use App\Http\Controllers\admin\DataPengajarController;
use App\Http\Controllers\admin\GaleriController;
use App\Http\Controllers\admin\JadwalController;
use App\Http\Controllers\admin\KelasController;
use App\Http\Controllers\admin\MataPelajaranController;
use App\Http\Controllers\admin\NilaiController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\SilabusController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Auth::routes(['register'=>false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/profil', [HomeController::class, 'profil']);

Route::get('/data-pengajar',[HomeController::class, 'dataPengajar']);
Route::get('/data-pengajar/{id}',[HomeController::class, 'dataPengajarPersonal']);
Route::get('/data-pelajar',[HomeController::class, 'dataPelajar'])->name('frontend.data-pelajar');
Route::get('/data-pelajar/{id}',[HomeController::class, 'dataPelajarPersonal']);
Route::get('/data-alumni',[HomeController::class, 'dataAlumni'])->name('frontend.data-alumni');
Route::get('/data-alumni/{id}',[HomeController::class, 'dataAlumniPersonal']);
Route::get('/berita',[HomeController::class, 'berita']);
Route::get('/berita/{id}',[HomeController::class, 'beritaSinglePage']);
Route::get('/silabus', [HomeController::class, 'silabus'])->name('frontend.silabus');
Route::get('/galeri', [HomeController::class,'galeri']);
Route::get('/user/{id}', [HomeController::class, 'user']);
Route::get('/user/edit/{id}', [HomeController::class, 'editUser']);
Route::post('/user/edit/post/{id}', [HomeController::class, 'update']);
Route::prefix('admin')->middleware(['role'])->group(function(){
    Route::resource('/dashboard',DashboardController::class);
    Route::resource('/galeri', GaleriController::class);
    Route::resource('/silabus', SilabusController::class);
    Route::resource('/profil', ProfileController::class);
    Route::resource('/berita', BeritaController::class);
    Route::resource('/pengajar', DataPengajarController::class);
    Route::resource('/pelajar', DataPelajarController::class);
    Route::resource('/alumni', DataAlumniController::class);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/mata-pelajaran', MataPelajaranController::class);
    Route::resource('/jadwal', JadwalController::class);
    Route::resource('/nilai', NilaiController::class);
    Route::get('/pelajar/{id}/nilai',[DataPelajarController::class,'nilai']);
    Route::get('/pelajar/lihat/nilai/{id}',[DataPelajarController::class,'lihatNilai'])->name('pelajar.lihat.nilai');
    Route::get('/pelajar/lihat/nilai/{id}/edit',[DataPelajarController::class,'editNilai'])->name('pelajar.edit.nilai');
    Route::post('/pelajar/nilai',[DataPelajarController::class,'addNilai'])->name('pelajar.nilai');
    Route::post('/pelajar/nilai/edit',[DataPelajarController::class,'updateNilai'])->name('pelajar.nilai.edit');

    Route::get('alumni/verifikasi/{id}',[DataAlumniController::class,'verify']);
    Route::get('alumni/{id}/check',[DataAlumniController::class,'check']);
    Route::post('alumni/addIjazah',[DataAlumniController::class,'addIjazah'])->name('alumni.addIjazah');
    Route::get('silabus/delete/{id}',[SilabusController::class,'destroy']);
    Route::get('/galeri/delete/{id}',[GaleriController::class,'destroy']);
    Route::get('berita/delete/{id}',[BeritaController::class,'destroy']);
    Route::get('pengajar/delete/{id}',[DataPengajarController::class,'destroy']);
    Route::get('pelajar/delete/{id}',[DataPelajarController::class,'destroy']);
    Route::get('kelas/delete/{id}',[KelasController::class,'destroy']);
    Route::get('jadwal/delete/{id}',[JadwalController::class,'destroy']);
    Route::get('/alumni/delete/{id}',[DataAlumniController::class,'destroy']);
});
