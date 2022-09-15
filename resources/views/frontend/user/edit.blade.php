@extends('frontend.layouts.app')

@section('content')
    <!-- Open Content -->

    @if (Auth::user()->role == 'alumni')

        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <!-- col end -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <form action="{{url('user/edit/post/'.$data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">Nama</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-8">
                                            <input type="text" class="form-control col-8" name="name" value="{{ $data->name }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">NISN</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-8">
                                            <input type="text" class="form-control col-8" name="nisn" value="{{ isset($data->nisn) ? $data->nisn : 'Data NISN Belum dimasukan'}}" disabled>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">Email</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-8">
                                            <input type="text" class="form-control col-8" name="email" value="{{ $data->email }}" >
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">Alamat</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-8">
                                            <input type="text" class="form-control col-8" name="alamat" value="{{ $data->dataAlumni->alamat }}" >
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">Nama Ayah</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-8">
                                            <input type="text" class="form-control col-8" name="nama_ayah" value="{{ $data->dataAlumni->nama_ayah }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">Nama Ibu</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-8">
                                            <input type="text" class="form-control col-8" name="nama_ibu" value="{{ $data->dataAlumni->nama_ibu }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">Tempat, Tanggal Lahir</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-3">
                                            <input type="text" class="form-control col-8" name="tempat_lahir" value="{{ $data->dataAlumni->tempat_lahir }}" disabled>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" class="form-control col-8" name="tanggal_lahir" value="{{ $data->dataAlumni->tanggal_lahir }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">Foto </h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-8">
                                            <input type="file" class="form-control col-8" name="foto" id="foto" >
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary form-control ">Edit Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @else

        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <!-- col end -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <form action="{{url('user/edit/post/'.$data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">Nama</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-8">
                                            <input type="text" class="form-control col-8" name="name" value="{{ $data->name }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">NISN</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-8">
                                            <input type="text" class="form-control col-8" name="nisn" value="{{ isset($data->nisn) ? $data->nisn : 'Data NISN Belum dimasukan'}}" disabled>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">Email</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-8">
                                            <input type="text" class="form-control col-8" name="email" value="{{ $data->email }}" >
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">Alamat</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-8">
                                            <input type="text" class="form-control col-8" name="alamat" value="{{ $data->dataPelajar->alamat }}" >
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h1 class="h3 col-3">Tempat, Tanggal Lahir</h1>
                                        <h1 class="h3 col-1">:</h1>
                                        <div class="col-3">
                                            <input type="text" class="form-control col-8" name="tempat_lahir" value="{{ $data->dataPelajar->tempat_lahir }}" disabled>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" class="form-control col-8" name="tanggal_lahir" value="{{ $data->dataPelajar->tanggal_lahir }}" disabled>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary form-control ">Edit Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif


    <!-- Close Content -->
@endsection
