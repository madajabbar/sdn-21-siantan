<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="{{url('/')}}">
            <img src="{{asset('frontend/assets/img/logo.png')}}" class="img-fluid" style="max-width: 50px" alt="">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/profil')}}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/data-pengajar')}}">Data Pengajar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/data-pelajar')}}">Data Pelajar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Silabus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('berita')}}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Galeri</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    <span class="position-absolute top-0 left-100  rounded-pill bg-light text-dark">Login</span>
                </a>
            </div>
        </div>

    </div>
</nav>
