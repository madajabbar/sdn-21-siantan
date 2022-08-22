@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card card-plain">
            <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah {{ $title }}</h3>
                <a href="{{route('alumni.index')}}" class="font-weight-bolder text-info "> Kembali </a>
            </div>
            <div class="card-body">
                <form role="form" action="{{ route('alumni.store') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                        <label>Nama</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="nama" aria-label="name"
                                name="name" required value="">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <label>NISN</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="nisn" aria-label="nisn"
                                name="nisn" required value="">
                                @error('nisn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <label>Email</label>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="email" aria-label="email"
                                name="email" required value="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <label>Password</label>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="password" aria-label="password"
                                name="password" required value="">
                        </div>
                        <label>Tempat Lahir</label>
                        <div class="mb-3">
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Pontianak"
                                class="form-control" required value="">
                        </div>
                        <label>Tanggal Lahir</label>
                        <div class="mb-3">
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="" required>
                        </div>
                        <label>Alamat</label>
                        <div class="mb-3">
                            <textarea type="text" name="alamat" id="alamat" placeholder="jalan/gang"
                                class="form-control" required value=""></textarea>
                        </div>
                        <label>Nama Ayah</label>
                        <div class="mb-3">
                            <input type="text" name="nama_ayah" placeholder="nama_ayah" id="nama_ayah"
                                class="form-control" value="">
                        </div>
                        <label>Nama Ibu</label>
                        <div class="mb-3">
                            <input type="text" name="nama_ibu" placeholder="nama_ibu" id="nama_ibu"
                                class="form-control" value="">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Update Data</button>
                        </div>
                        @error('any')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </form>
            </div>
        </div>
    </div>
@endsection
