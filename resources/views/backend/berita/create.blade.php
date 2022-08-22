@extends('backend.layouts.app')

@section('css')
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="card card-plain">
            <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah {{ $title }}</h3>
                <a href="{{route('berita.index')}}" class="font-weight-bolder text-info "> Kembali </a>
            </div>
            <div class="card-body">
                <form role="form" action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    @if (isset($data->id))
                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <label>Judul</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Judul" aria-label="Judul" name="judul"
                                required value="{{ $data->judul }}">
                        </div>
                        <label>Isi</label>
                        <div class="mb-3">
                            <textarea class="form-control" name="isi" id="isi" required>
                                {!!$data->isi!!}
                            </textarea>
                        </div>
                        <label>Gambar</label>
                        <div class="mb-3">
                            <input type="file" class="form-control" placeholder="link" aria-label="link" name="link"
                            accept="image/jpeg,image/gif,image/png,image/jpg" >
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Update Data</button>
                        </div>
                    @else
                        <label>Judul</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Judul" aria-label="Judul" name="judul"
                                required>
                        </div>
                        <label>Isi</label>
                        <div class="mb-3">
                            <textarea class="form-control" name="isi" id="isi" required>
                            </textarea>
                        </div>
                        <label>File</label>
                        <div class="mb-3">
                            <input type="file" class="form-control" placeholder="link" aria-label="link" name="link"
                                required accept="image/jpeg,image/gif,image/png,image/jpg">
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

@section('js')

    <script>
        ClassicEditor
            .create(document.querySelector('#isi'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
