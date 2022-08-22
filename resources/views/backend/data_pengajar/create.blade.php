@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card card-plain">
            <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah {{ $title }}</h3>
                <a href="{{route('pengajar.index')}}" class="font-weight-bolder text-info "> Kembali </a>
            </div>
            <div class="card-body">
                <form role="form" action="{{ route('pengajar.store') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    @if (isset($data->id))
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <label>Nama</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="nama" aria-label="nama" name="nama"
                                required value="{{ $data->nama }}">
                        </div>
                        <label>NIP</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="nip" aria-label="nip" name="nip"
                                required value="{{ $data->nip }}">
                        </div>
                        <label>Status</label>
                        <div class="mb-3">
                            <select name="status" id="status" class="form-control" required>
                                {{-- {{$status}} --}}
                                @foreach ($status as $stat)
                                    <option value="{{$stat}}" {{ $stat == $data->status ? 'selected' : '' }} >{{$stat}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label>pendidikan</label>
                        <div class="mb-3">
                            <select name="pendidikan" id="pendidikan" class="form-control" required>
                                @foreach ($pendidikan as $pendidikan)
                                    <option value="{{$pendidikan}}" {{ $pendidikan == $data->pendidikan ? 'selected' : '' }} >{{$pendidikan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label>Jabatan</label>
                        <div class="mb-3">
                            <input type="text" name="jabatan" placeholder="Kepala/Staff" id="Jabatan"
                                class="form-control" required value="{{ $data->jabatan }}">
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
                            <select name="agama" id="agama" class="form-control" required value="{{ $data->agama }}">
                                @foreach ($agama as $agama)
                                <option value="{{$agama}}" {{ $agama == $data->agama ? 'selected' : '' }} >{{$agama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label>Tempat Lahir</label>
                        <div class="mb-3">
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Pontianak"
                                class="form-control" required value="{{ $data->tempat_lahir }}">
                        </div>
                        <label>Tanggal Lahir</label>
                        <div class="mb-3">
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required
                                value="{{ $data->tanggal_lahir }}">
                        </div>
                        <label>Alamat</label>
                        <div class="mb-3">
                            <input type="text" name="alamat" id="alamat" placeholder="jalan/gang"
                                class="form-control" required value="{{ $data->alamat }}">
                        </div>
                        <label>Telepon</label>
                        <div class="mb-3">
                            <input type="number" name="telepon" id="telepon" placeholder="08xxx" class="form-control"
                                required value="{{ $data->telepon }}">
                        </div>
                        <label>Keterangan</label>
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
                        <label>NIP</label>
                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="nip" aria-label="nip"
                                name="nip" required>
                        </div>
                        <label>Status</label>
                        <div class="mb-3">
                            <select name="status" id="status" class="form-control" required>
                                <option value="Aktif">Aktif</option>
                                <option value="Non Aktif">Non Aktif</option>
                            </select>
                        </div>
                        <label>pendidikan</label>
                        <div class="mb-3">
                            <select name="pendidikan" id="pendidikan" class="form-control" required>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <label>Jabatan</label>
                        <div class="mb-3">
                            <input type="text" name="jabatan" placeholder="Kepala/Staff" id="Jabatan"
                                class="form-control" required>
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

                    @error('nip')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </form>
            </div>
        </div>
    </div>
@endsection
