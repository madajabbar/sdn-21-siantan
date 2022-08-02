@extends('frontend.layouts.app')

@section('content')
    <!-- Start Content -->
    <div class="container py-5">
        <h1 class="text-center">About Us</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="https://picsum.photos/200/300">
                                <div
                                    class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="{{url('/data-pengajar/personal')}}"><i
                                                    class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="{{url('/data-pengajar/personal')}}"><i
                                                    class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="{{url('/data-pengajar/personal')}}"><i
                                                    class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <center>
                                    <a href="{{url('/data-pengajar/personal')}}" class="h3 text-decoration-none">NAMA</a>
                                    <br>
                                    <a href="{{url('/data-pengajar/personal')}}" class="h3 text-decoration-none">NIP</a>
                                </center>
                            </div>
                        </div>
                    </div>
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
