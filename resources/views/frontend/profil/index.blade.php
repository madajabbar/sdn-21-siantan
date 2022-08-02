@extends('frontend.layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/chart.css') }}">
@endsection
@section('content')
    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>About Us</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/about-hero.svg" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->
    <section class="container py-5">
        <div class="m-auto text-center">
            <h1 class="h1">SAMBUTAN KEPALA SEKOLAH</h1>
        </div>
        </div>
        <div class="container">
            <div class="row p-5">
                <div class="col-lg-12 mb-0 d-flex align-items-center">
                    <div class="text-align-left align-self-center text-justify">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis earum corrupti ipsam alias
                            quam inventore cum, aliquam, incidunt laudantium dolorem, nihil quasi a magni fugiat vero
                            ut. Soluta, amet voluptas!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quia incidunt reprehenderit
                            nulla quod commodi, maiores quam earum dolorum fugit sapiente beatae optio praesentium
                            cupiditate quos nemo hic ullam tempore?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quia incidunt reprehenderit
                            nulla quod commodi, maiores quam earum dolorum fugit sapiente beatae optio praesentium
                            cupiditate quos nemo hic ullam tempore?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="col-lg-6 m-auto text-center">
            <h1 class="h1">VISI DAN MISI</h1>
        </div>
        </div>
        <div class="container">
            <div class="row p-5">
                <div class="col-lg-12 mb-0 d-flex align-items-center">
                    <div class="text-align-left align-self-center">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis earum corrupti ipsam alias
                            quam inventore cum, aliquam, incidunt laudantium dolorem, nihil quasi a magni fugiat vero
                            ut. Soluta, amet voluptas!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quia incidunt reprehenderit
                            nulla quod commodi, maiores quam earum dolorum fugit sapiente beatae optio praesentium
                            cupiditate quos nemo hic ullam tempore?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quia incidunt reprehenderit
                            nulla quod commodi, maiores quam earum dolorum fugit sapiente beatae optio praesentium
                            cupiditate quos nemo hic ullam tempore?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="col-lg-6 m-auto text-center">
            <h1 class="h1">STRUKTUR ORGANISASI</h1>
        </div>
        </div>
        <div class="container text-center">
            <h1 class="level-1 rectangle">Kepala Sekolah</h1>
            <ul class="level-2-wrapper">
                <li>
                    <h2 class="level-2 rectangle">Director A</h2>
                    <ul class="level-3-wrapper">
                        <li>
                            <h3 class="level-3 rectangle">Manager A</h3>
                            <ul class="level-4-wrapper">
                                <li>
                                    <h4 class="level-4 rectangle">Person A</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person B</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person C</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person D</h4>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="level-3 rectangle">Manager B</h3>
                            <ul class="level-4-wrapper">
                                <li>
                                    <h4 class="level-4 rectangle">Person A</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person B</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person C</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person D</h4>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h2 class="level-2 rectangle">Director B</h2>
                    <ul class="level-3-wrapper">
                        <li>
                            <h3 class="level-3 rectangle">Manager C</h3>
                            <ul class="level-4-wrapper">
                                <li>
                                    <h4 class="level-4 rectangle">Person A</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person B</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person C</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person D</h4>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="level-3 rectangle">Manager D</h3>
                            <ul class="level-4-wrapper">
                                <li>
                                    <h4 class="level-4 rectangle">Person A</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person B</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person C</h4>
                                </li>
                                <li>
                                    <h4 class="level-4 rectangle">Person D</h4>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
@endsection
