<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>About</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>


  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{ asset('images/ie8-panel/warning_bar_0000_us.jpg') }}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <div class="page">
      
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="/"><img src="images/logo.png" alt="" width="225" height="18"/></a>
                  </div>
                </div>
                <div class="rd-navbar-aside-right rd-navbar-collapse">
                  
                  @if (Route::has('login'))
                    @auth
                    <a class="button button-md button-default-outline-2 button-ujarak" href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                    <a class="button button-md button-default-outline-2 button-ujarak" href="{{ route('login') }}">Iniciar Sesión</a>
                    @if (Route::has('register'))
                    <a class="button button-md button-default-outline-2 button-ujarak" href="{{ route('register') }}">Registarse</a>
                    @endif
                @endauth
                @endif
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                  </ul>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="/">Inicio</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about">Sobre Nosotros</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Proximamente</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contact">Contáctanos</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
        <!-- Encabezado Fin -->
      </header>
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Sobre Nosotros</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="/">Inicio</a></li>
              <li class="active">Acerca de</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/about.png);"></div>
        </div>
      </section>
      <!-- Why choose us-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="images/why.jpg" alt="" width="519" height="564"/>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
              <h1 class="text-spacing-25 font-weight-normal title-opacity-5">¿Por qué elegirnos?</h1>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Misión</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">                 
                  <div class="tab-pane fade show active" id="tabs-4-3">
                    <p>Somos una plataforma la cual ayuda a las personas a poder convertirse en mejores viajeros desde la planificación, reserva y realización del viaje.</p>
                    <div class="text-center text-sm-left offset-top-30 tab-height">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li>Responsabilidad</li>
                        <li>Honestidad</li>
                        <li>Humanismo</li>
                        <li>Compromismo</li>
                        <li>Orientación al cliente</li>
                        <li>Trabajo en equipo</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest Projects-->
      <section class="section section-sm section-fluid bg-default">
        <div class="container">
          <h3>Destinos</h3>
        </div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/quito2.png" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/quito2.png" data-lightgallery="item"><img src="images/quito2.png" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Quito</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/guayaquil2.png" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/guayaquil2.png" data-lightgallery="item"><img src="images/guayaquil2.png" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Guayaquil</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/cuenca2.png" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/cuenca2.png" data-lightgallery="item"><img src="images/cuenca2.png" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Cuenca</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/ambato3.png" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/ambato3.png" data-lightgallery="item"><img src="images/ambato3.png" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Ambato</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/emeraldas2.png" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/emeraldas2.png" data-lightgallery="item"><img src="images/emeraldas2.png" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Esmeraldas</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/macas2.png" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/macas2.png" data-lightgallery="item"><img src="images/macas2.png" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Macas</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
        </div>
      </section>
      <!-- What people Say-->
      
      <!--Counters-->
      <!-- Counter Classic-->
      <section class="section section-fluid bg-default">
        <div class="parallax-container" data-parallax-img="images/MitadMundo.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-26">
            <div class="container">
              <div class="row row-50 justify-content-center border-classic">
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">10</span>
                    </div>
                    <h5 class="counter-classic-title">Destinos</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">10</span>
                    </div>
                    <h5 class="counter-classic-title">Hoteles</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">10</span>
                    </div>
                    <h5 class="counter-classic-title">Guias</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">10</span>
                    </div>
                    <h5 class="counter-classic-title">Transportes</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
      <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
          <div class="container">
            <div class="row row-40 justify-content-lg-between">
              <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInRight" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Contactanos</h6>
                    <ul class="footer-contacts d-inline-block d-sm-block">
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" href="tel:#">+593 999 229 286</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                          <div class="unit-body"><a class="link-aemail" href="mailto:#">viajandojuntos@gmail.com</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a class="link-location" href="#">Av. 12 de Octubre 1076, Quito 170143</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInDown" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Noticias Populares</h6>
                    <!-- Post Minimal 2-->
                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title"><a href="#">Enlaces pedientes</a></p>
                      <div class="post-minimal-2-time">
                        <time datetime="2019-05-04">Oct 12, 2022</time>
                      </div>
                    </article>
                    <!-- Post Minimal 2-->
                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title"><a href="#">Enlaces pedientes</a></p>
                      <div class="post-minimal-2-time">
                        <time datetime="2019-05-04">Oct 12, 2022</time>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInLeft" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Enlaces</h6>
                    <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                      <li><a href="/">Inicio</a></li>
                      <li><a href="about">Sobre nosotros</a></li>
                      <li><a href="#">enlace pendiente</a></li>
                      <li><a href="contact">Contáctanos</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-corporate-bottom-panel">
          <div class="container">
            <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
              <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                
              </div>
              <div class="col-sm-6 col-md-4 order-sm-first">
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Viajando Juntos</span>. Todos los derechos reservados. Diseñado por <a >DALTECH</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ asset('/js/core.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
  </body>
</html>