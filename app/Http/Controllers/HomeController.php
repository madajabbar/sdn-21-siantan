<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.beranda.index');
    }
    public function profil(){
        return view('frontend.profil.index');
    }
    public function dataPengajar(){
        return view('frontend.data_pengajar.index');
    }
    public function dataPengajarPersonal(){
        return view('frontend.data_pengajar.data_pengajar_personal.index');
    }
    public function dataPelajar(){
        return view('frontend.data_pelajar.index');
    }
    public function dataPelajarPersonal(){
        return view('frontend.data_pelajar.data_pelajar_personal.index');
    }
    public function berita(){
        return view('frontend.berita.index');
    }
    public function beritaSinglePage(){
        return view('frontend.berita.single-page.index');
    }
}
