@extends('backend.layouts.app')

@section('css')
@endsection

@section('content')
<center>

    <div class="row">
        <div class="col-xl-6 col-sm-6  mb-7">
          <div class="card">
            <div class="card-body p-5">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Pengajar</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{$pengajar}}
                      <span class="text-success text-sm font-weight-bolder">orang</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6  mb-7">
          <div class="card">
            <div class="card-body p-5">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Pelajar</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{$pelajar}}
                      <span class="text-success text-sm font-weight-bolder">orang</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6  mb-7">
          <div class="card">
            <div class="card-body p-5">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Alumni</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{$alumni}}
                      <span class="text-danger text-sm font-weight-bolder">orang</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6">
          <div class="card">
            <div class="card-body p-5">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Silabus</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{$silabus}}
                      <span class="text-success text-sm font-weight-bolder">buah</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</center>

@endsection
