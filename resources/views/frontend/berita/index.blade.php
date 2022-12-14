@extends('frontend.layouts.app')

@section('content')
    <!-- Start Content -->
    <div class="container py-5">
        <h1 class="text-center">Berita</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($berita as $data)
                    <div class="col-md-3">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="{{asset('storage/'.$data->link)}}">
                            </div>
                            <div class="card-body">
                                <center>
                                    <a href="{{url('/berita/'.$data->id)}}" class="h2 text-decoration-none">{{$data->judul}}</a>
                                    <br>
                                    <a href="{{url('/berita/'.$data->id)}}" class="p text-decoration-none">Dibuat :   {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</a>
                                </center>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#"
                                tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                                href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark"
                                href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->
@endsection
