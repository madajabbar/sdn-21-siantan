@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card card-plain">
            <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah {{ $title }}</h3>
                <a href="{{route('alumni.index')}}" class="font-weight-bolder text-info "> Kembali </a>
            </div>
            <div class="card-body">
                <form role="form" action="{{ route('alumni.addIjazah') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    @if (isset($data->id))
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <label>Ijazah</label>
                        <div class="mb-3">
                            <input type="file" class="form-control" placeholder="link" aria-label="link"
                                name="link" accept="application/pdf" required>
                        </div>
                        @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Update Data</button>
                        </div>
                    @else
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="mb-3">
                        <input type="file" class="form-control" placeholder="link" aria-label="link"
                            name="link" accept="application/pdf"required>
                    </div>
                    @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Tambah Data</button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
