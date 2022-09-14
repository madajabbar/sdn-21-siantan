@extends('frontend.layouts.app')

@section('content')
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{asset('storage/'.$alumni->foto)}}" alt="Card image cap"
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
                                <h1 class="h3 col-8">{{ $alumni->user->name }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">NISN</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $alumni->user->nisn }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">EMAIL</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $alumni->user->email }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">TTL</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $alumni->tempat_lahir }}, {{ $alumni->tanggal_lahir }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">Alamat</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $alumni->alamat }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">Nama Ayah</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $alumni->nama_ayah }}</h1>
                            </div>
                            <div class="row">
                                <h1 class="h3 col-3">Nama Ibu</h1>
                                <h1 class="h3 col-1">:</h1>
                                <h1 class="h3 col-8">{{ $alumni->nama_ibu }}</h1>
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
