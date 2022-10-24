<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Ciudades</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="{{ asset('/css/text/css') }}" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
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
                    <a class="button button-md button-default-outline-2 button-ujarak" href="{{ url('/dashboard') }}">Mi Cuenta</a>
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
<!-- Encabezado fin -->
      <!-- Page Content -->
    <!-- Swiper-->
    
      <!-- Section Box Categories-->
      <!-- Hot tours-->
      <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Seleccione su Destino</span></h3>
          <div class="row row-sm row-40 row-md-50">
            <div class="col-sm-6 col-md-12 wow fadeInRight">
            <div class="container">
          <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
              <div class="row justify-content-center">
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="package_choose?ciudad=Quito"><img src="images/quito.png" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Quito</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="package_choose?ciudad=Guayaquil"><img src="images/guayaquil.png" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Guayaquil</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="package_choose?ciudad=Cuenca"><img src="images/cuenca.png" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Cuenca</h5>
                    </li>
                  </ul>
                  <br/>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="package_choose?ciudad=Esmeraldas"><img src="images/esmeraldas.png" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Esmeraldas</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="package_choose?ciudad=Ambato"><img src="images/ambato.png" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Ambato</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="package_choose?ciudad=Macas"><img src="images/macas.png" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Macas</h5>
                    </li>
                  </ul>
                  <br/>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="package_choose?ciudad=Riobamba"><img src="images/riobamba.png" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Riobamba</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="package_choose?ciudad=Ibarra"><img src="images/ibarra.png" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Ibarra</h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="package_choose?ciudad=Napo"><img src="images/napo.png" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">Napo</h5>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Owl Carousel-->
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