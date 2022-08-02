<?php

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

// Route::get('/', function () {
//     return view('frontend.beranda.index');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/profil', [HomeController::class, 'profil']);

Route::get('/data-pengajar',[HomeController::class, 'dataPengajar']);
Route::get('/data-pengajar/personal',[HomeController::class, 'dataPengajarPersonal']);
Route::get('/data-pelajar',[HomeController::class, 'dataPelajar']);
Route::get('/data-pelajar/personal',[HomeController::class, 'dataPelajarPersonal']);
Route::get('/berita',[HomeController::class, 'berita']);
Route::get('/berita/judul',[HomeController::class, 'beritaSinglePage']);
