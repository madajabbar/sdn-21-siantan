@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card card-plain">
            <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah {{ $title }}</h3>
                <a href="{{route('jadwal.index')}}" class="font-weight-bolder text-info "> Kembali </a>
            </div>
            <div class="card-body">
                <form role="form" action="{{ route('jadwal.store') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    @if (isset($data->id))
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <label>Mata Pelajaran</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="contoh: Tematik" aria-label="nama"
                                name="mata_pelajaran" required value="{{$data->mata_pelajaran}}">
                        </div>
                        <label>Hari</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="contoh: Senin" aria-label="nama"
                                name="hari" required value="{{$data->hari}}">
                        </div>
                        <label>Jam</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="contoh: 7 Pagi" aria-label="nama"
                                name="jam" required value="{{$data->jam}}">
                        </div>
                        <label>Kelas</label>
                        <div class="mb-3">
                            <select name="kelas_id" id="kelas_id">
                                @foreach ($kelas as $kls)
                                <option value="{{$kls->id}}" {{$data->kelas_id == $kls->id ? ' selected' : ''}}>{{$kls->name}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Update Data</button>
                        </div>
                    @else
                        <label>Nama</label>
                        <label>Mata Pelajaran</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="contoh: Tematik" aria-label="nama"
                                name="mata_pelajaran" required >
                        </div>
                        <label>Hari</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="contoh: Senin" aria-label="nama"
                                name="hari" required >
                        </div>
                        <label>Jam</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="contoh: 7 Pagi" aria-label="nama"
                                name="jam" required >
                        </div>
                        <label>Kelas</label>
                        <div class="mb-3">
                            <select class="form-control" name="kelas_id" id="kelas_id">
                                @foreach ($kelas as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
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
