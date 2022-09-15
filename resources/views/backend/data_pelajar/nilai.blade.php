@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card card-plain">
            <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah {{ $title }}</h3>
                <a href="{{ route('pelajar.index') }}" class="font-weight-bolder text-info "> Kembali </a>
            </div>
            <div class="card-body">
                <form role="form" action="{{ route('pelajar.nilai') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <input type="hidden" name="data_pelajar_id" value="{{$data->id}}">
                    @foreach ($jadwal as $jdwl)
                    <input type="hidden" name="jadwal_id[]" value="{{$jdwl->id}}">
                        <div class="row">
                            <div class="col-4">
                                <label for="">{{$jdwl->mata_pelajaran}}</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="nilai[]">
                            </div>
                        </div>
                    @endforeach
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Tambah Nilai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
