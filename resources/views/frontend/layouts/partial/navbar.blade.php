<nav class="navbar sticky-top navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" class="img-fluid" style="max-width: 50px" alt="">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profil') }}">Profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Data
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                          <li> <a class="nav-link" href="{{ url('/data-pengajar') }}">Data Pengajar</a></li>
                          <li><a class="nav-link" href="{{ url('/data-pelajar') }}">Data Pelajar</a></li>
                          <li><a class="nav-link" href="{{ url('/data-alumni') }}">Data Alumni</a></li>
                        </ul>
                      </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/data-pengajar') }}">Data Pengajar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/data-pelajar') }}">Data Pelajar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/data-alumni') }}">Data Alumni</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/silabus')}}">Silabus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/berita') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/galeri')}}">Galeri</a>
                    </li>
                </ul>
            </div>
            @if (Auth::check())
                <div class="navbar align-self-center d-flex">
                    <a class="nav-icon position-relative text-decoration-none" href="{{Auth::user()->role == 'alumni' ? url('user/'.Auth::user()->id) : route('dashboard.index')}}">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="btn btn-light top-0 left-100">{{Auth::user()->name}}</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                            @csrf
                            <button type="submit" class="btn btn-primary text-light">Logout</button>
                        </form>
                    </a>
                </div>
                @else
                <div class="navbar align-self-center d-flex">
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <a href="{{ route('login') }}"class="btn btn-primary text-light">Log In</a>
                    </a>
                </div>
                @endif
        </div>

    </div>
</nav>
