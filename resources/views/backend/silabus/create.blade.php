@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="card card-plain">
            <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah Silabus</h3>
                <a href="{{route('silabus.index')}}" class="font-weight-bolder text-info "> Kembali </a>
            </div>
            <div class="card-body">
                <form role="form" action="{{route('silabus.store')}}" method="post" enctype="multipart/form-data">
                    @csrf()
                    @if(isset($data->id))
                    <input type="hidden" name="id" value="{{$data->id}}">

                    <label>Mata Pelajaran</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Mata Pelajaran" aria-label="Mata Pelajaran"
                            name="mata_pelajaran" required value="{{$data->mata_pelajaran}}">
                    </div>
                    <label>Tahun Ajar</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Tahun Ajar" aria-label="Tahun Ajar"
                        name="tahun_ajar" value="{{$data->tahun_ajar}}" required>
                    </div>
                    <label>Kelas</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="kelas" aria-label="kelas"
                        name="kelas" required value="{{$data->kelas}}">
                    </div>
                    <label>File</label>
                    <div class="mb-3">
                        <label for="link">file sekarang <a href="{{$data->link ? asset('storage/'.$data->link) : '#'}}">{{$data->link ? $data->link : 'Kosong'}}</a> </label>
                        <input type="file" class="form-control" placeholder="link" aria-label="link"
                        name="link" accept="application/pdf">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Update Data</button>
                    </div>
                    @else

                    <label>Mata Pelajaran</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Mata Pelajaran" aria-label="Mata Pelajaran"
                            name="mata_pelajaran" required >
                    </div>
                    <label>Tahun Ajar</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Tahun Ajar" aria-label="Tahun Ajar"
                        name="tahun_ajar" required>
                    </div>
                    <label>Kelas</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="kelas" aria-label="kelas"
                        name="kelas" required >
                    </div>
                    <label>File</label>
                    <div class="mb-3">
                        <input type="file" class="form-control" placeholder="link" aria-label="link"
                        name="link" required accept="application/pdf">
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
