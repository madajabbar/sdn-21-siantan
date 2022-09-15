@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card card-plain">
            <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah {{ $title }}</h3>
                <a href="{{ route('pelajar.index') }}" class="font-weight-bolder text-info "> Kembali </a>
            </div>
            <div class="card-body">
                <form role="form" action="{{ route('pelajar.nilai.edit') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="row">
                            <div class="col-4">
                                <label for="">{{$data->jadwal->mata_pelajaran}}</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="nilai" value="{{ $data->nilai}}">
                            </div>
                        </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Ubah Nilai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
