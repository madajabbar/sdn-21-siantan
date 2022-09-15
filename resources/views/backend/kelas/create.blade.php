@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card card-plain">
            <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah {{ $title }}</h3>
                <a href="{{route('kelas.index')}}" class="font-weight-bolder text-info "> Kembali </a>
            </div>
            <div class="card-body">
                <form role="form" action="{{ route('kelas.store') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    @if (isset($data->id))
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <label>Nama</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="contoh: 6A" aria-label="nama"
                                name="name" required value="{{$data->name}}">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Update Data</button>
                        </div>
                    @else
                        <label>Nama</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="contoh: 6A" aria-label="nama"
                                name="name" required>
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
