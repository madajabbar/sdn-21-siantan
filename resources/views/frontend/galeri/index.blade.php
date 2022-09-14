@extends('frontend.layouts.app')

@section('content')
    <!-- Start Content -->
    <div class="container py-5">
        <h1 class="text-center">Galeri</h1>
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    @foreach ($galeri as $data)
                    <div class="col-md-3">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="{{asset('storage/'.$data->link)}}">
                                <div
                                    class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="{{'storage/'.$data->link}}"><i
                                                    class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="{{'storage/'.$data->link}}"><i
                                                    class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="{{'storage/'.$data->link}}"><i
                                                    class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{$galeri->links()}}
            </div>

        </div>
    </div>
    <!-- End Content -->
@endsection
