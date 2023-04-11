<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wavi - ChatBot</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chat.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/asistente.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="#"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-center">
                            <li class="nav-item active"><a class="nav-link" href="#">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Ofertas</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Categorias</a>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Nosotros</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                        </ul>
                        {{-- <ul class="nav navbar-nav navbar-right navbar-social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-skype"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <main class="site-main">
        <!--================Hero Banner start =================-->
        <section class="mb-30px">
            <div class="container">
                <div class="hero-banner">
                    <div class="hero-banner__content">
                        <h3>Tours & Viajes</h3>
                        <h1>Lugares increíbles para visitar</h1>
                    </div>
                </div>
            </div>
        </section>
        <!--================Hero Banner end =================-->

        <!--================ Blog slider start =================-->
        <section>
            <div class="container">
                <div class="owl-carousel owl-theme blog-slider">
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="img/blog/blog-slider/blog-slide1.png" alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Visitar</a>
                            <h3><a href="#">Vive experiencias inolvidable, tenemos las mejores ofertas </a></h3>
                            <p>Hace 2 dias</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="img/blog/blog-slider/blog-slide2.png" alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Visitar</a>
                            <h3><a href="#">Vive experiencias inolvidable, tenemos las mejores ofertas </a></h3>
                            <p>Hace 2 dias</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="img/blog/blog-slider/blog-slide3.png" alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Visitar</a>
                            <h3><a href="#">Vive experiencias inolvidable, tenemos las mejores ofertas </a></h3>
                            <p>Hace 2 dias</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="img/blog/blog-slider/blog-slide1.png"
                                alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Visitar</a>
                            <h3><a href="#">Vive experiencias inolvidable, tenemos las mejores ofertas </a></h3>
                            <p>Hace 2 dias</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="img/blog/blog-slider/blog-slide2.png"
                                alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Visitar</a>
                            <h3><a href="#">Vive experiencias inolvidable, tenemos las mejores ofertas </a></h3>
                            <p>Hace 2 dias</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="img/blog/blog-slider/blog-slide3.png"
                                alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Visitar</a>
                            <h3><a href="#">Vive experiencias inolvidable, tenemos las mejores ofertas </a></h3>
                            <p>Hace 2 dias</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Blog slider end =================-->

        <!--================ Start Blog Post Area =================-->
        <section class="blog-post-area section-margin mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="img/blog/blog1.png" alt="">
                                <ul class="thumb-info">
                                    <li><a></i>Admin</a></li>
                                    <li><a></i>enero 12,2019</a></li>
                                    <li><a></i>2 Comentarios</a></li>
                                </ul>
                            </div>
                            <div class="details mt-20">
                                <a href="#">
                                    <h3>Gremios de turismo esperan que se supere lo logrado en Semana Santa del 2022: los factores detrás.</h3>
                                </a>
                                <p class="tag-list-inline">Etiqueta: <a href="#">viajar</a>, <a href="#">estilo de vida</a>, <a href="#">Tecnologia</a>, <a href="#"></a></p>
                                <p>Esta semana el Ministerio de Transporte y Turismo
                                    proyectó que Semana Santa movilizará a más de 1′000,000 de visitantes
                                    a nivel nacional, generando un resultado económico de US$ 107 millones.
                                    Ante ello, la Cámara Nacional de Turismo del Perú, el Gremio de
                                    Turismo de la Cámara de Comercio de Lima y la Asociación Peruana de Hoteles,
                                    Restaurantes y Afines analizan el comportamiento esperado
                                    para esta fecha.</p>
                                <a class="button" href="#">LEER MÁS </a>
                            </div>
                        </div>

                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="img/blog/blog2.png" alt="">
                                <ul class="thumb-info">
                                    <li><a></i>Admin</a></li>
                                    <li><a></i>enero 12,2019</a></li>
                                    <li><a></i>2 Comentarios</a></li>
                                </ul>
                            </div>
                            <div class="details mt-20">
                                <a href="#">
                                    <h3>Gremios de turismo esperan que se supere lo logrado en Semana Santa del 2022: los factores detrás.</h3>
                                </a>
                                <p class="tag-list-inline">Etiqueta: <a href="#">viajar</a>, <a href="#">estilo de vida</a>, <a href="#">Tecnologia</a>, <a href="#"></a></p>
                                        <p>Esta semana el Ministerio de Transporte y Turismo
                                            proyectó que Semana Santa movilizará a más de 1′000,000 de visitantes
                                            a nivel nacional, generando un resultado económico de US$ 107 millones.
                                            Ante ello, la Cámara Nacional de Turismo del Perú, el Gremio de
                                            Turismo de la Cámara de Comercio de Lima y la Asociación Peruana de Hoteles,
                                            Restaurantes y Afines analizan el comportamiento esperado
                                            para esta fecha.</p>
                                <a class="button" href="#">LEER MÁS </a>
                            </div>
                        </div>

                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="img/blog/blog3.png" alt="">
                                <ul class="thumb-info">
                                    <li><a></i>Admin</a></li>
                                    <li><a></i>enero 12,2019</a></li>
                                    <li><a></i>2 Comentarios</a></li>
                                </ul>
                            </div>
                            <div class="details mt-20">
                                <a href="#">
                                    <h3>Tourist deaths in Costa Rica jeopardize safe dest
                                        ination reputation all time. </h3>
                                </a>
                                <p class="tag-list-inline">Etiqueta: <a href="#">viajar</a>, <a href="#">estilo de vida</a>, <a href="#">Tecnologia</a>, <a href="#"></a></p>
                                        <p>Esta semana el Ministerio de Transporte y Turismo
                                            proyectó que Semana Santa movilizará a más de 1′000,000 de visitantes
                                            a nivel nacional, generando un resultado económico de US$ 107 millones.
                                            Ante ello, la Cámara Nacional de Turismo del Perú, el Gremio de
                                            Turismo de la Cámara de Comercio de Lima y la Asociación Peruana de Hoteles,
                                            Restaurantes y Afines analizan el comportamiento esperado
                                            para esta fecha.</p>
                                <a class="button" href="#">LEER MÁS </a>
                            </div>
                        </div>

                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="img/blog/blog4.png" alt="">
                                <ul class="thumb-info">
                                    <li><a></i>Admin</a></li>
                                    <li><a></i>enero 12,2019</a></li>
                                    <li><a></i>2 Comentarios</a></li>
                                </ul>
                            </div>
                            <div class="details mt-20">
                                <a href="#">
                                    <h3>Tourist deaths in Costa Rica jeopardize safe dest
                                        ination reputation all time. </h3>
                                </a>
                                <p class="tag-list-inline">Etiqueta: <a href="#">viajar</a>, <a href="#">estilo de vida</a>, <a href="#">Tecnologia</a>, <a href="#"></a></p>
                                        <p>Esta semana el Ministerio de Transporte y Turismo
                                            proyectó que Semana Santa movilizará a más de 1′000,000 de visitantes
                                            a nivel nacional, generando un resultado económico de US$ 107 millones.
                                            Ante ello, la Cámara Nacional de Turismo del Perú, el Gremio de
                                            Turismo de la Cámara de Comercio de Lima y la Asociación Peruana de Hoteles,
                                            Restaurantes y Afines analizan el comportamiento esperado
                                            para esta fecha.</p>
                                <a class="button" href="#">LEER MÁS </a>
                            </div>
                        </div>



                        {{-- <div class="row">
                            <div class="col-lg-12">
                                <nav class="blog-pagination justify-content-center d-flex">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Previous">
                                                <span aria-hidden="true">
                                                    <i class="ti-angle-left"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Next">
                                                <span aria-hidden="true">
                                                    <i class="ti-angle-right"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div> --}}
                    </div>

                    <!-- Start Blog Post Siddebar -->
                    <div class="col-lg-4 sidebar-widgets">
                        <div class="widget-wrap">
                            <div class="single-sidebar-widget newsletter-widget">
                                <h4 class="single-sidebar-widget__title">Suscribete</h4>
                                <div class="form-group mt-30">
                                    <div class="col-autos">
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="Ingresa tu email" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Ingresa tu email'">
                                    </div>
                                </div>
                                <button class="bbtns d-block mt-20 w-100">Suscribir</button>
                            </div>


                            <div class="single-sidebar-widget post-category-widget">
                                <h4 class="single-sidebar-widget__title">Categoria</h4>
                                <ul class="cat-list mt-20">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Tecnologia</p>
                                            <p>(03)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Software</p>
                                            <p>(09)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Estilo de vida</p>
                                            <p>(12)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Compras</p>
                                            <p>(02)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Comida</p>
                                            <p>(10)</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>



                            <div class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="single-sidebar-widget__title">Publicaciones populares</h4>
                                <ul class="list">
                                    <li>
                                        <a href="#">Proyectos</a>
                                    </li>
                                    <li>
                                        <a href="#">Amor</a>
                                    </li>
                                    <li>
                                        <a href="#">Tecnologia</a>
                                    </li>
                                    <li>
                                        <a href="#">viajar</a>
                                    </li>
                                    <li>
                                        <a href="#">software</a>
                                    </li>
                                    <li>
                                        <a href="#">estilo de vida</a>
                                    </li>
                                    <li>
                                        <a href="#">design</a>
                                    </li>
                                    <li>
                                        <a href="#">illustration</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Post Siddebar -->
            </div>
        </section>
        <!--================ End Blog Post Area =================-->
    </main>

    <!--================ Start Footer Area =================-->
    <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>
                {{-- <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Suscribete</h6>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Ingresa tu email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu email '"
                                        required="" type="email">


                                    <button class="click-btn btn btn-default"><span
                                            class="lnr lnr-arrow-right"></span></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1"
                                            value="" type="text">
                                    </div>

                                    <!-- <div class="col-lg-4 col-md-4">
                          <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                        </div>  -->
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/instagram/i1.jpg" alt=""></li>
                            <li><img src="img/instagram/i2.jpg" alt=""></li>
                            <li><img src="img/instagram/i3.jpg" alt=""></li>
                            <li><img src="img/instagram/i4.jpg" alt=""></li>
                            <li><img src="img/instagram/i5.jpg" alt=""></li>
                            <li><img src="img/instagram/i6.jpg" alt=""></li>
                            <li><img src="img/instagram/i7.jpg" alt=""></li>
                            <li><img src="img/instagram/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-dribbble"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-behance"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!--================ End Footer Area =================-->

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

<script>
    var botmanWidget = {
        aboutText: 'Write Something',
        introMessage: "✋ Hola viajero! Soy Wavi un asistente virtual fui creado por JAIRO PEREZ CORDOVA para poderte ayudar con tu viaje, dinos Hola para poder empezar."
    };
</script>

<script src='{{ asset('js/widget.js') }}'></script>

</html>
