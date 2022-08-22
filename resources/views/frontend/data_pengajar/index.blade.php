@extends('frontend.layouts.app')

@section('content')
    <!-- Start Content -->
    <div class="container py-5">
        <h1 class="text-center">DATA PENGAJAR</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                        @foreach ($pengajar as $data)
                        <div class="col-md-4">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0" width="500" height="500"src="{{asset('storage/'.$data->link)}}">
                                </div>
                                <div class="card-body">
                                    <center>
                                        <a href="{{url('/data-pengajar/'.$data->id)}}" class="h3 text-decoration-none">{{$data->nama}}</a>
                                        <br>
                                        <a href="{{url('/data-pengajar/'.$data->id)}}" class="h3 text-decoration-none">{{$data->nip}}</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        {!! $pengajar->links() !!}
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->
@endsection
