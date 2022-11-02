<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Pago</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="{{ asset('/css/text/css') }}"
        href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style type="text/css">
    .panel-title {
        display: inline;
        font-weight: bold;
    }

    .display-table {
        display: table;
    }

    .display-tr {
        display: table-row;
    }

    .display-td {
        display: table-cell;
        vertical-align: middle;
        width: 61%;
    }
    </style>
        <script>
    <?php

  $con = new mysqli('localhost','root','','agencia03');
 
  //Creación de Paquetes por mes 
  $query = $con->query("
  Select * from packages order by id DESC LIMIT 1
  ");

  foreach($query as $data){
    $id = $data['id'];
    $subtotal = $data['subtotal'];
  }
?>
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <style>
    .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
        display: block;
    }
    </style>

</head>

<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="{{ asset('images/ie8-panel/warning_bar_0000_us.jpg') }}" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
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
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed"
                    data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                    data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                    data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                    data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
                    data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px"
                    data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true"
                    data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                        data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                    <div class="rd-navbar-aside-outer">
                        <div class="rd-navbar-aside">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand--><a class="brand" href="/"><img src="images/logo.png" alt="" width="225"
                                            height="18" /></a>
                                </div>
                            </div>
                            <div class="rd-navbar-aside-right rd-navbar-collapse">

                                @if (Route::has('login'))
                                @auth
                                <a class="button button-md button-default-outline-2 button-ujarak"
                                    href="{{ url('/dashboard') }}">Mi Cuenta</a>
                                @else
                                <a class="button button-md button-default-outline-2 button-ujarak"
                                    href="{{ route('login') }}">Iniciar Sesión</a>
                                @if (Route::has('register'))
                                <a class="button button-md button-default-outline-2 button-ujarak"
                                    href="{{ route('register') }}">Registarse</a>
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
                                    <li><a class="icon fa fa-facebook"
                                            href="https://www.facebook.com/viajando.juntos.2022/"></a></li>
                                    <li><a class="icon fa fa-instagram"
                                            href="https://www.instagram.com/viajando_juntos01/"></a></li>
                                </ul>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="/">Inicio</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about">Sobre Nosotros</a>
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

        <br>
        <br>
        <div class="card container">
            <div class="card-header">
                <p class="h5">{{ Auth::user()->name }}, su paquete se ha completado.</p>

            </div>
            <div class="card-body">
                <p class="card-text">Para finalizar con el proceso de compra del paquete es necesario realizar el
  pago correspondiente.</p><br>
  <h3>Total a pagar :  $ <?php  echo $subtotal ?>  USD</h3>
            </div>

            <div>
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <div class="panel panel-default credit-card-box">
                                <div class="panel-heading display-table">
                                    <div class="row display-tr">
                                        <h3 class="panel-title display-td">Detalles del pago</h3>

                                    </div>
                                </div>
                                <br>
                                <div class="panel-body">
                                    @if (Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        <a href="" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                    @endif
                                    <form role="form" action="{{route('stripe.post')}}" method="post"
                                        class="require-validation" data-cc-on-file="false"
                                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                        @csrf
                                        <div text-align:center class="card">
                                            <div class="card-body">
                                                <div class='form-group required'>
                                                    <label class='control-label'>Nombre en la Tarjeta</label>
                                                    <input class='form-control' size='10' type='text' required>
                                                </div>
                                                <div class='form-group required'>
                                                    <label class='control-label'>Numero de la Tarjeta</label>
                                                    <input autocomplete='off' required class='form-control card-number'
                                                        size='20' type='number'>
                                                </div>
                                                <div class='form-row row'>
                                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                        <label class='control-label'>Código de Seguridad</label> <input
                                                            required autocomplete='off' class='form-control card-cvc'
                                                            placeholder='Ej. 311' size='4' type='number'>
                                                    </div>
                                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                        <label class='control-label'>Mes de expiración</label>
                                                        <input required class='form-control card-expiry-month'
                                                            placeholder='MM' size='2' type='number'>
                                                    </div>
                                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                        <label class='control-label'>Año de expiración</label>
                                                        <input required class='form-control card-expiry-year'
                                                            placeholder='AAAA' size='4' type='number'>
                                                    </div>

                                                    <div class='col-xs col-md form-group expiration'>
                                                        <button class="btn btn-primary btn-lg btn-block"
                                                            type="submit">Pagar ahora</button>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                    <br><br>
                                    <a class="btn btn-primary" href="{{route('processPaypal')}}">Pagar Mediante
                                        Paypal</a>


                                </div>
                                <br><br>
                            </div>

                        </div>
                        <div class="col">

                        </div>
                    </div>

                </div>


            </div>



        </div>
    </div>
    </div>






    <br>
    <br>
    <!-- Page Footer-->
    <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
            <div class="container">
                <div class="row row-40 justify-content-lg-between">
                    <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                        <div class="oh-desktop">
                            <div class="wow slideInRight" data-wow-delay="0s">
                                <h6 class="text-spacing-100 text-uppercase">Contáctanos</h6>
                                <ul class="footer-contacts d-inline-block d-sm-block">
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                            <div class="unit-body"><a class="link-phone" href="tel:#">+593 999 229
                                                    286</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                            <div class="unit-body"><a class="link-aemail"
                                                    href="mailto:#">viajandojuntos@gmail.com</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                                            <div class="unit-body"><a class="link-location" href="">Av. 12 de Octubre
                                                    1076, Quito 170143</a></div>
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
                                    <p class="post-minimal-2-title"><a
                                            href="https://www.viator.com/es-ES/Ecuador/d727-ttd?m=26374&supag=65619063982&supsc=dsa-694098303804&supai=420430239824&supap=&supdv=c&supnt=nt%3Ag&suplp=9069516&supli=&supti=dsa-694098303804&tsem=true&supci=dsa-694098303804&supap1=&supap2=&gclid=CjwKCAjwh4ObBhAzEiwAHzZYU2SpNe1UNm8uH22VW4JXKRMTpRQLW7bV5Te-tL8KYr9fWfV9xFOlzRoCFKgQAvD_BwE">Mejores
                                            Lugares Turísticos</a></p>
                                    <div class="post-minimal-2-time">
                                        <time datetime="2019-05-04">Oct 12, 2022</time>
                                    </div>
                                </article>
                                <!-- Post Minimal 2-->
                                <article class="post post-minimal-2">
                                    <p class="post-minimal-2-title"><a
                                            href="https://miaventuraviajando.com/top-7-mejores-playas-ecuador/">Mejores
                                            Playas</a></p>
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
                        <p class="rights"><span>&copy;&nbsp;</span><span
                                class="copyright-year"></span><span>&nbsp;</span><span>Viajando Juntos</span>. Todos los
                            derechos reservados. Diseñado por <a>DALTECH</a></p>
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
    <script>
    function fireSweetAlert() {
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        )
    }
    </script>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
    $(function() {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });
            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
    </script>





</body>

</html>