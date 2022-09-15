@extends('frontend.layouts.app')

@section('content')
    <!-- Open Content -->
    @if (Auth::user()->role == 'alumni')
        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <a href="{{ isset($data->dataAlumni->link) ? asset('storage/' . $data->dataAlumni->link) : '#' }}">
                            <div class="card mb-3">
                                <img class="card-img img-fluid" src="{{ asset('frontend\assets\img\ijazah.jpg') }}"
                                    alt="https://www.freepik.com/free-vector/social-media-illustration_5275573.htm#query=document&position=1&from_view=search"
                                    id="product-detail">
                            </div>
                            <h1 class="h1 text-center">
                                {{ $data->dataAlumni->link ? 'DOWNLOAD IJAZAH' : 'AKUN BELUM TERVERIFIKASI' }}</h1>
                        </a>
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-3">
                                    <h1 class="h3 col-3">Nama</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">{{ $data->name }}</h1>
                                </div>
                                <div class="row m-3">
                                    <h1 class="h3 col-3">NISN</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">
                                        {{ isset($data->nisn) ? $data->nisn : 'Data NISN Belum dimasukan' }}</h1>
                                </div>
                                <div class="row m-3">
                                    <h1 class="h3 col-3">Email</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">{{ $data->email }}</h1>
                                </div>
                                <div class="row m-3">
                                    <h1 class="h3 col-3">Alamat</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">{{ $data->dataAlumni->alamat }}</h1>
                                </div>
                                <div class="row m-3">
                                    <h1 class="h3 col-3">Nama Ayah</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">{{ $data->dataAlumni->nama_ayah }}</h1>
                                </div>
                                <div class="row m-3">
                                    <h1 class="h3 col-3">Nama Ibu</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">{{ $data->dataAlumni->nama_ibu }}</h1>
                                </div>
                                <div class="row m-3">
                                    <h1 class="h3 col-3">Tempat, Tanggal Lahir</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">
                                        {{ $data->dataAlumni->tempat_lahir . ' ' . $data->dataAlumni->tanggal_lahir }}</h1>
                                </div>
                                <div class="row m-3">
                                    <div class="col d-grid">
                                        <a href="{{ url('user/edit/' . $data->id) }}" class="btn btn-warning btn-lg">Edit
                                            User</a>
                                    </div>
                                </div>
                                <form action="" method="GET">
                                    <input type="hidden" name="product-title" value="Activewear">
                                    <div class="row m-3 pb-3">
                                        <div class="col d-grid">
                                            <a href="{{ url()->previous() }}" class="btn btn-secondary btn-lg">Kembali</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <a href="{{ isset($data->dataPelajar->link) ? asset('storage/' . $data->dataPelajar->link) : '#' }}">
                            <div class="card mb-3">
                                <img class="card-img img-fluid" src="{{ asset('frontend\assets\img\ijazah.jpg') }}"
                                    alt="https://www.freepik.com/free-vector/social-media-illustration_5275573.htm#query=document&position=1&from_view=search"
                                    id="product-detail">
                            </div>
                        </a>
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-3">
                                    <h1 class="h3 col-3">Nama</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">{{ $data->name }}</h1>
                                </div>
                                <div class="row m-3">
                                    <h1 class="h3 col-3">NISN</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">
                                        {{ isset($data->nisn) ? $data->nisn : 'Data NISN Belum dimasukan' }}</h1>
                                </div>
                                <div class="row m-3">
                                    <h1 class="h3 col-3">Email</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">{{ $data->email }}</h1>
                                </div>
                                <div class="row m-3">
                                    <h1 class="h3 col-3">Alamat</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">{{ $data->dataPelajar->alamat }}</h1>
                                </div>
                                <div class="row m-3">
                                    <h1 class="h3 col-3">Tempat, Tanggal Lahir</h1>
                                    <h1 class="h3 col-1">:</h1>
                                    <h1 class="h3 col-8">
                                        {{ $data->dataPelajar->tempat_lahir . ' ' . $data->dataPelajar->tanggal_lahir }}</h1>
                                </div>
                                @foreach ($data->dataPelajar->nilai as $nilai)
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">{{$nilai->jadwal->mata_pelajaran}}</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <h1 class="h3 col-8">{{$nilai->nilai}}</h1>
                                    </div>
                                @endforeach
                                <form action="" method="GET">
                                    <input type="hidden" name="product-title" value="Activewear">
                                    <div class="row m-3 pb-3">
                                        <div class="col d-grid">
                                            <a href="{{ url()->previous() }}"
                                                class="btn btn-secondary btn-lg">Kembali</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Close Content -->
@endsection
