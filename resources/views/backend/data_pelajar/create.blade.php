@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card card-plain">
            <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah {{ $title }}</h3>
                <a href="{{route('pelajar.index')}}" class="font-weight-bolder text-info "> Kembali </a>
            </div>
            <div class="card-body">
                <form role="form" action="{{ route('pelajar.store') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    @if (isset($data->id))
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <label>Nama</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="nama" aria-label="nama"
                                name="nama" required value="{{$data->nama}}">
                        </div>
                        <label>NISN</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="nisn" aria-label="nisn"
                                name="nisn" required value="{{$data->nisn}}">
                        </div>
                        <label>Jenis Kelamin</label>
                        <div class="mb-3">
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                @foreach ($jenis_kelamin as $jenis_kelamin)
                                <option value="{{$jenis_kelamin}}" {{ $jenis_kelamin == $data->jenis_kelamin ? 'selected' : '' }} >{{$jenis_kelamin}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label>Agama</label>
                        <div class="mb-3">
                            <select name="agama" id="agama" class="form-control" required>
                                @foreach ($agama as $agama)
                                <option value="{{$agama}}" {{ $agama == $data->agama ? 'selected' : '' }} >{{$agama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label>Tempat Lahir</label>
                        <div class="mb-3">
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Pontianak"
                                class="form-control" required value="{{$data->tempat_lahir}}">
                        </div>
                        <label>Tanggal Lahir</label>
                        <div class="mb-3">
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{$data->tanggal_lahir}}" required>
                        </div>
                        <label>Alamat</label>
                        <div class="mb-3">
                            <input type="text" name="alamat" id="alamat" placeholder="jalan/gang"
                                class="form-control" required value="{{$data->alamat}}">
                        </div>
                        <label>Telepon</label>
                        <div class="mb-3">
                            <input type="text" name="telepon" id="telepon" placeholder="08xxx"
                                class="form-control" required value="{{$data->telepon}}">
                        </div>
                        <label>Status</label>
                        <div class="mb-3">
                            <input type="text" name="keterangan" placeholder="keterangan" id="keterangan"
                                class="form-control" value="{{$data->keterangan}}">
                        </div>
                        <label>Foto</label>
                        <div class="mb-3">
                            <input type="file" name="link" placeholder="link" id="link"
                                class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Update Data</button>
                        </div>
                    @else
                        <label>Nama</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="nama" aria-label="nama"
                                name="nama" required>
                        </div>
                        <label>NISN</label>
                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="nisn" aria-label="nisn"
                                name="nisn" required>
                        </div>
                        <label>Jenis Kelamin</label>
                        <div class="mb-3">
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <label>Agama</label>
                        <div class="mb-3">
                            <select name="agama" id="agama" class="form-control" required>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Khatolik">Khatolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <label>Tempat Lahir</label>
                        <div class="mb-3">
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Pontianak"
                                class="form-control" required>
                        </div>
                        <label>Tanggal Lahir</label>
                        <div class="mb-3">
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                        </div>
                        <label>Alamat</label>
                        <div class="mb-3">
                            <input type="text" name="alamat" id="alamat" placeholder="jalan/gang"
                                class="form-control" required>
                        </div>
                        <label>Telepon</label>
                        <div class="mb-3">
                            <input type="number" name="telepon" id="telepon" placeholder="08xxx"
                                class="form-control" required>
                        </div>
                        <label>Keterangan</label>
                        <div class="mb-3">
                            <input type="text" name="keterangan" placeholder="keterangan" id="keterangan"
                                class="form-control">
                        </div>
                        <label>Foto</label>
                        <div class="mb-3">
                            <input type="file" name="link" placeholder="link" id="link"
                                class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Tambah Data</button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
