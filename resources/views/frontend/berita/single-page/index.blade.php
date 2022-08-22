@extends('frontend.layouts.app')

@section('content')
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{asset('storage/'.$berita->link)}}" alt="Card image cap"
                            id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{ $berita->judul }}</h1>
                            <p class="h3 py-2">{{ \Carbon\Carbon::parse($berita->created_at)->format('d-m-Y') }}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Author:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Admin</strong></p>
                                </li>
                            </ul>
                            <p>
                                {!! $berita->isi !!}

                            </p>
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <a class="btn btn-success btn-lg" href="{{ url()->previous() }}">Kembali</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
@endsection
