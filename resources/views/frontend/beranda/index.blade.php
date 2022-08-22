@extends('frontend.layouts.app')

@section('content')
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/bg-hero_1.png')}}" width="400" height="400" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Lorem </b>ipsum</h1>
                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                                <p>
                                    Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1).
                                    This template is 100% free provided by <a rel="sponsored" class="text-success"
                                        href="https://templatemo.com" target="_blank">TemplateMo</a> website.
                                    Image credits go to <a rel="sponsored" class="text-success"
                                        href="https://stories.freepik.com/" target="_blank">Freepik Stories</a>,
                                    <a rel="sponsored" class="text-success" href="https://unsplash.com/"
                                        target="_blank">Unsplash</a> and
                                    <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">Icons
                                        8</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/bg-hero_2.png')}}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites.
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any
                                    kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/bg-hero_3.png')}}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites.
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell
                                    your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">SAMBUTAN KEPALA SEKOLAH</h1>
            </div>
        </div>
        <div class="container">
            <div class="row p-5">
                <div class="col-lg-6 mb-0 d-flex align-items-center">
                    <div class="text-align-left align-self-center">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quod modi a! Repellendus magni
                            corrupti cumque necessitatibus. Aspernatur molestiae quas officia iste magni sapiente enim
                            reiciendis doloremque quam distinctio. Veniam cupiditate, quasi ipsam vel laborum rem? Facere
                            quibusdam aspernatur perferendis ducimus debitis vel est officia. Iusto quia obcaecati aperiam
                            minus eius nisi culpa esse illum necessitatibus similique, temporibus eligendi placeat, beatae
                            distinctio nam modi dolores cum tempora quos, sint perferendis ullam rerum deserunt. Molestias
                            nulla nostrum quis illum aperiam cupiditate eaque in, omnis cum vitae atque repellat dolorem,
                            assumenda est quidem iusto? Ipsam dolore odit quae pariatur officia error suscipit?
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At beatae ipsum sed consequuntur.
                            Consequatur hic in et veniam. Maiores eius odio quis rem dolore saepe modi! Esse quibusdam
                            perspiciatis doloribus.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis cum nihil aliquam, dicta
                            consequatur tenetur beatae iusto? Architecto molestias laborum consequuntur, asperiores rerum
                            ipsam quidem expedita voluptates officia obcaecati omnis beatae qui illo consequatur doloribus
                            quas culpa laudantium quod inventore quisquam nisi animi incidunt. Minus provident modi beatae
                            quia ut!</p>
                    </div>
                </div>
                <div class="mx-auto col-md-8 col-lg-6 order-lg-first">
                    <img class="img-fluid" src="https://picsum.photos/400/600" width="400" height="600" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">FASILITAS SEKOLAH</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-home"></i></div>
                    <h2 class="h5 mt-4 text-center">MUSHOLA</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-book"></i></div>
                    <h2 class="h5 mt-4 text-center">PERPUSTAKAAN</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-university"></i></div>
                    <h2 class="h5 mt-4 text-center">KELAS</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-hospital"></i></div>
                    <h2 class="h5 mt-4 text-center">UKS</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-object-group"></i></div>
                    <h2 class="h5 mt-4 text-center">Lapangan</h2>
                </div>
            </div>

        </div>
    </section>
@endsection
