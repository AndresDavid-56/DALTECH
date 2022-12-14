
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Inicio</title>
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
                    <p class="h4">Bienvenido {{ Auth::user()->name }}  </p>
                    <a class="button button-md button-default-outline-2 button-ujarak" href="{{ url('/dashboard') }}">Mi Cuenta</a>
                    @else
                    <a class="button button-md button-default-outline-2 button-ujarak" href="{{ route('login') }}">Iniciar Sesi??n</a>
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
                    <li><a class="icon fa fa-facebook" href="https://www.facebook.com/viajando.juntos.2022/"></a></li>
                    <li><a class="icon fa fa-instagram" href="https://www.instagram.com/viajando_juntos01/"></a></li>
                  </ul>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="/">Inicio</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about">Sobre Nosotros</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contact">Cont??ctanos</a>
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
    <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
        <div class="swiper-wrapper text-left">
          <div class="swiper-slide context-dark" data-slide-bg="images/wolf.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Disfruta de los Mejores Destinos de nuestro pa??s</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Conoce</span><span class="font-weight-bold"> El pa??s</span></h2>
                    @if (Route::has('login')) 
                    @auth
                    <a class="button button-default-outline button-ujarak" href="city_choose" data-caption-animate="fadeInLeft" data-caption-delay="0">Saber m??s</a>
                    @else
                    @endauth
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/playa.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Un equipo de expertos en viajes</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Mejora</span><span class="font-weight-bold"> Tu experiencia al viajar</span></h2>
                    @if (Route::has('login')) 
                    @auth
                    <a class="button button-default-outline button-ujarak" href="city_choose" data-caption-animate="fadeInLeft" data-caption-delay="0">Saber m??s</a>
                    @else
                    @endauth
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/Amazonia.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Elige el destino de tus pr??ximas vacaciones con nosotros</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Elige</span><span class="font-weight-bold"> Tu recorrido</span></h2>
                    @if (Route::has('login')) 
                    @auth
                    <a class="button button-default-outline button-ujarak" href="city_choose" data-caption-animate="fadeInLeft" data-caption-delay="0">Saber m??s</a>
                    @else
                    @endauth
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
      </section>
     
      <!-- Discover New Horizons-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-lg-6 text-center wow fadeInUp"><img src="images/women.jpg" alt="" width="556" height="382"/>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-width-lg-470">
                <h3>Descubre nuevos horizontes</h3>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                  <!-- Nav tabs
                  <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">About us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab">Why choose us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3" data-toggle="tab">Our mission</a></li>
                  </ul>
                  -->
                  <!-- Tab panes-->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-7-1">
                      <p>Viajando Juntos se compromete a brindar a nuestros clientes lo mejor en paquetes de viaje de valor y calidad. Nos apasiona viajar y compartir contigo las maravillas de nunestro Pa??s.</p>
                      <p>Estamos orgullosos de ofrecer una excelente calidad y una excelente relaci??n calidad-precio en nuestros tours, que le brindan la oportunidad de experimentar el destino elegido de una manera aut??ntica y emocionante.</p>
                      <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="city_choose">Saber m??s</a></div>
                    </div>
                    <div class="tab-pane fade" id="tabs-7-2">
                      <p>Estamos orgullosos de ofrecer una excelente calidad y una excelente relaci??n calidad-precio en nuestros tours, que le brindan la oportunidad de experimentar el destino elegido de una manera aut??ntica y emocionante.</p>
                      <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="city_choose">Get in Touch</a><a class="button button-black-outline button-md" href="about">Read More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--	Our Services-->
      <section class="section section-sm">
        <div class="container">
          <h3>Nuestros Servicios</h3>
          <div class="row row-30">
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="">La mejor experiencia</a></h5>
                    <p class="box-icon-classic-text">Nuestro sistema permite encontrar el recorrido que desea para sus pr??ximas vacaciones.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="">Amplia Variedad de Tours<rs</a></h5>
                    <p class="box-icon-classic-text">Ofrecemos una amplia variedad de tours elegidos personalmente con destinos en todo el Pa??s.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-wallet26"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="">Mejor Precio Garantizado</a></h5>
                    <p class="box-icon-classic-text">Si encuentra tours m??s baratos que los nuestros, le compensamos la diferencia.</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
       <!-- Different People-->
      <section class="section section-sm">
        <div class="container">
          <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Involucrados</span></h3>
          <div class="row row-30 justify-content-center box-ordered">
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><a class="team-modern-figure" href=""><img class="img-circles" src="images/usu.png" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="">Ana Navas</a></h6>
                  <p class="team-modern-status">Due??o del Negocio</p>
                  <h6 class="team-modern-phone"><a href="tel:#">+593 99-913-4688</a></h6>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><a class="team-modern-figure" href=""><img class="img-circles" src="images/usu.png" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="">Andr??s Alvear</a></h6>
                  <p class="team-modern-status">Desarrollador Senior</p>
                  <h6 class="team-modern-phone"><a href="tel:#">+593 99-913-4688</a></h6>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><a class="team-modern-figure" href=""><img class="img-circles" src="images/usu.png" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="">Dennis Quishpe</a></h6>
                  <p class="team-modern-status">Desarrollador Junior</p>
                  <h6 class="team-modern-phone"><a href="tel:#">+593 99-913-4688</a></h6>
                </div>
              </article>
            </div>
    
          </div>
        </div>
      </section>
      <!--	Instagrram wondertour-->
      <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
        <div class="container-fluid">
          <h6 class="gallery-title">Galeria</h6>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/galeria1.png" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria1.png" data-lightgallery="item"><img src="images/galeria1.png" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/galeria2.png" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria2.png" data-lightgallery="item"><img src="images/galeria2.png" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/galeria3.png" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria3.png" data-lightgallery="item"><img src="images/galeria3.png" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/galeria4.png" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria4.png" data-lightgallery="item"><img src="images/galeria4.png" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/galeria5.png" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria5.png" data-lightgallery="item"><img src="images/galeria5.png" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/galeria6.png" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria6.png" data-lightgallery="item"><img src="images/galeria6.png" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/galeria7.png" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria7.png" data-lightgallery="item"><img src="images/galeria7.png" alt="" width="270" height="195"/></a>
              </div>
            </article>
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
                    <h6 class="text-spacing-100 text-uppercase">Cont??ctanos</h6>
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
                          <div class="unit-body"><a class="link-location" href="">Av. 12 de Octubre 1076, Quito 170143</a></div>
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
                      <p class="post-minimal-2-title"><a href="https://www.viator.com/es-ES/Ecuador/d727-ttd?m=26374&supag=65619063982&supsc=dsa-694098303804&supai=420430239824&supap=&supdv=c&supnt=nt%3Ag&suplp=9069516&supli=&supti=dsa-694098303804&tsem=true&supci=dsa-694098303804&supap1=&supap2=&gclid=CjwKCAjwh4ObBhAzEiwAHzZYU2SpNe1UNm8uH22VW4JXKRMTpRQLW7bV5Te-tL8KYr9fWfV9xFOlzRoCFKgQAvD_BwE">Mejores Lugares Tur??sticos</a></p>
                      <div class="post-minimal-2-time">
                        <time datetime="2019-05-04">Oct 12, 2022</time>
                      </div>
                    </article>
                    <!-- Post Minimal 2-->
                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title"><a href="https://miaventuraviajando.com/top-7-mejores-playas-ecuador/">Mejores Playas</a></p>
                      <div class="post-minimal-2-time">
                        <time datetime="2019-05-04">Oct 12, 2022</time>
                      </div>
                    </article>
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
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Viajando Juntos</span>. Todos los derechos reservados. Dise??ado por <a >DALTECH</a></p>
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
