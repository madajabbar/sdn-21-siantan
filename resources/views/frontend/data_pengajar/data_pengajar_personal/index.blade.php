@extends('frontend.layouts.app')

@section('content')
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{asset('storage/'.$pengajar->link)}}" alt="Card image cap"
                            id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h1 class="h3 col-3">Nama</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $pengajar->nama }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">NIP</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $pengajar->nip }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">Status</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $pengajar->status }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">Pendidikan</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $pengajar->pendidikan }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">Jabatan</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $pengajar->jabatan }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">Jenis Kelamin</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $pengajar->jenis_kelamin }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">Agama</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $pengajar->agama }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">Umur</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{\Carbon\Carbon::now()->format('Y') - date('Y', strtotime($pengajar->tanggal_lahir)) }}</h1>
                            </div>
                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <a href="{{ url()->previous() }}" class="btn btn-success btn-lg"
                                            >Kembali</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
@endsection
