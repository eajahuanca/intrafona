<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Intranet</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{ asset('plugin/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('plugin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="{{ asset('plugin/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-right">
                <a href="#intro" class="scrollto"><img src="{{ asset('plugin/img/fona_mini.png') }}" /></a>
            </div>
            <nav id="nav-menu-container" class="pull-center">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Inicio</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#services">Documentos</a></li>
                    <li><a href="#call-to-action">Formularios</a></li>
                    <li><a href="#team">Superiores</a></li>
                    <li><a href="#contact">Contacto</a></li>
                    <li>
					@if (Route::has('login'))
						@if (Auth::check())
							<a href="{{ url('/home') }}">Sito de Administración Web</a>
						@else
							<a href="{{ url('/login') }}">Ingresar</a>
						@endif
					@endif
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->
    <!--Cumpleañeros-->
    <div id="happy">
        <h3>Cumpleañeros</h3>
        <div class="testimonial-item">
            <img src="{{ asset('plugin/img/testimonial-1.jpg') }}" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
        </div>
        <div class="testimonial-item">
            <img src="{{ asset('plugin/img/testimonial-1.jpg') }}" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
        </div>
    </div>
    <!--#Cumpleañeros-->
    <!-- Intro Section -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="{{ asset('plugin/img/intro-carousel/1.jpg') }}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Nuestra INTRANET</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <a href="#featured-services" class="btn-get-started scrollto">Accesos Directos</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('plugin/img/intro-carousel/2.jpg') }}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Nuestra INTRANET</h2>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis
                                    debitis aut.</p>
                                <a href="#featured-services" class="btn-get-started scrollto">Accesos Directos</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('plugin/img/intro-carousel/3.jpg') }}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Nuestra INTRANET</h2>
                                <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem
                                    accusantium.
                                </p>
                                <a href="#featured-services" class="btn-get-started scrollto">Accesos Directos</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('plugin/img/intro-carousel/4.jpg') }}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Nuestra INTRANET</h2>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                                    quis nostrum.</p>
                                <a href="#featured-services" class="btn-get-started scrollto">Accesos Directos</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('plugin/img/intro-carousel/5.jpg') }}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Nuestra INTRANET</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <a href="#featured-services" class="btn-get-started scrollto">Accesos Directos</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>

            </div>
        </div>
    </section>
    <!-- #intro -->

    <main id="main">

        <!-- Featured Services Section -->
        <section id="featured-services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4">
                        <center id="adirectos">
                            <a href="https://correo.fonabosque.gob.bo/" target="_blank">
                                <img src="{{ asset('plugin/img/correo.png') }}" />
                                <h4><b>CORREO</b></h4>
                                <p class="description">Correo Electrónico Institucional, uso exclusivo del personal de FONABOSQUE.</p>
                            </a>
                        </center>
                    </div>

                    <div class="col-lg-4">
                        <center id="adirectos">
                            <a href="http://sigec.fonabosque.gob.bo/" target="_blank">
                                <img src="{{ asset('plugin/img/sigec.png') }}" />
                                <h4><b>SIGEC</b></h4>
                                <p class="description">Sistema de Gestión de Correspondencia, uso exlusivo del perosnal de FONABOSQUE.</p>
                            </a>
                        </center>
                    </div>

                    <div class="col-lg-4">
                        <center id="adirectos">
                            <a href="http://personal.fonabosque.gob.bo/" target="_blank">
                                <img src="{{ asset('plugin/img/bimetrico.png') }}" />
                                <h4><b>PERSONAL</b></h4>
                                <p class="description">Sistema Integral de Recursos Humanos, para consultar sus marcaciones y registrar sus boletas de salida</p>
                            </a>
                        </center>
                    </div>

                    <div class="col-lg-4">
                        <center id="adirectos">
                            <a href="https://sigep.sigma.gob.bo/" target="_blank">
                                <img src="{{ asset('plugin/img/sigma.png') }}" />
                                <h4><b>SIGMA/SIGEP</b></h4>
                                <p class="description">Sistema de Gestion Pública, ingreso para entidades públicas y beneficiarios</p>
                            </a>
                        </center>
                    </div>

                    <div class="col-lg-4">
                        <center id="adirectos">
                            <a href="http://www.mmaya.gob.bo/" target="_blank">
                                <img src="{{ asset('plugin/img/mmaya2.png') }}" />
                                <h4><b>MMAYA</b></h4>
                                <p class="description">Sitio Oficial (Págian Web) del Ministerio de Medio Ambiente y Agua. <b>www.mmaya.gob.bo</b></p>
                            </a>
                        </center>
                    </div>

                    <div class="col-lg-4">
                        <center id="adirectos">
                            <a href="http://www.fonabosque.gob.bo/" target="_blank">
                                <img src="{{ asset('plugin/img/web.png') }}" />
                                <h4><b>SITIO WEB</b></h4>
                                <p class="description">Sitio Oficial (Págian Web) de la institución. <b>www.fonabosque.gob.bo</b></p>
                            </a>
                        </center>
                    </div>

                </div>
            </div>
        </section>
        <!-- #featured-services -->

        <!-- About Us Section -->
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>Acerca de Nosotros</h3>
                </header>

                <div class="row about-cols">

                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('plugin/img/about-mission.jpg') }}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Nuestra Misión</a></h2>
                            <p>
                                “Promover, administrar y otorgar recursos financieros para el manejo sustentable de bosques, con enfoque de gestión integral de cuencas, conservación de los bosques y suelos forestales, recuperación de suelos degradados en áreas forestales y manejo integral
                                del fuego”.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('plugin/img/about-vision.jpg') }}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Nuestra Visión</a></h2>
                            <p>
                                “Posicionarse como una entidad pública reconocida y fortalecida a nivel nacional e internacional, que realiza una oportuna y eficiente canalización, gestión y administración de los recursos financieros para programas y proyectos de desarrollo sustentable
                                de bosques, aportando al crecimiento económico y social de la población bajo el principio del Suma Qamaña (Vivir Bien)”.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('plugin/img/about-plan.jpg') }}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Nuestros Objetivos</a></h2>
                            <p>1. Promover la conservación y preservación, a través de la producción, forestación, reforestación y transferencia de conocimientos y tecnologías forestales en armonía y equilibrio con la Madre Tierra.</p>
                            <p>2. Realizar la gestión eficiente de administración de los recursos económicos para el Vivir Bien.</p>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- #about -->

        <!-- Services Section -->
        <section id="services">
            <div class="container">

                <header class="section-header wow fadeInUp">
                    <h3>Documentos</h3>
                    <p>En esta Sección se encuentran los siguientes documentos: Circulares, Instructivos, Resoluciones/Decretos, Comunicados y otros.</p>
                </header>

                <div class="row">

                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><img src="{{ asset('plugin/img/pdf.png') }}" /></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <div style="margin-top:-1em;margin-left:6.5em;font-size:9px;color:red;"><img src="{{ asset('plugin/img/calendar.png') }}" /> 23/03/2018 | Tamaño: 2kb</div>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><img src="{{ asset('plugin/img/pdf.png') }}" /></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <div style="margin-top:-1em;margin-left:6.5em;font-size:9px;color:red;"><img src="{{ asset('plugin/img/calendar.png') }}" /> 23/03/2018 | Tamaño: 2kb</div>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><img src="{{ asset('plugin/img/pdf.png') }}" /></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <div style="margin-top:-1em;margin-left:6.5em;font-size:9px;color:red;"><img src="{{ asset('plugin/img/calendar.png') }}" /> 23/03/2018 | Tamaño: 2kb</div>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><img src="{{ asset('plugin/img/pdf.png') }}" /></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <div style="margin-top:-1em;margin-left:6.5em;font-size:9px;color:red;"><img src="{{ asset('plugin/img/calendar.png') }}" /> 23/03/2018 | Tamaño: 2kb</div>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><img src="{{ asset('plugin/img/pdf.png') }}" /></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <div style="margin-top:-1em;margin-left:6.5em;font-size:9px;color:red;"><img src="{{ asset('plugin/img/calendar.png') }}" /> 23/03/2018 | Tamaño: 2kb</div>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><img src="{{ asset('plugin/img/pdf.png') }}" /></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <div style="margin-top:-1em;margin-left:6.5em;font-size:9px;color:red;"><img src="{{ asset('plugin/img/calendar.png') }}" /> 23/03/2018 | Tamaño: 2kb</div>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                    </div>

                </div>

            </div>
        </section>
        <!-- #services -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="wow fadeIn">
            <div class="container text-center">
                <h3>Formularios</h3>
                <p>En esta sección se pueden observar y descargar los siguientes formularios: Desvinculación, solicitud de materiales y otrds.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <a href=".">
                            <div class="row">
                                <div class="col-md-2 icon">
                                    <img src="{{ asset('plugin/img/pdf.png') }}" />
                                </div>
                                <div class="col-md-10">
                                    <p class="description">Voluptatum deleniti atque corrupti</p>
                                    <div style="margin-top:-3em;font-size:9px;color:rgb(255, 255, 255);"><img src="{{ asset('plugin/img/calendar.png') }}" /> 23/03/2018 | Tamaño: 2kb</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <a href=".">
                            <div class="row">
                                <div class="col-md-2 icon">
                                    <img src="{{ asset('plugin/img/pdf.png') }}" />
                                </div>
                                <div class="col-md-10">
                                    <p class="description">Voluptatum deleniti atque corrupti</p>
                                    <div style="margin-top:-3em;font-size:9px;color:rgb(255, 255, 255);"><img src="{{ asset('plugin/img/calendar.png') }}" /> 23/03/2018 | Tamaño: 2kb</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <a href=".">
                            <div class="row">
                                <div class="col-md-2 icon">
                                    <img src="{{ asset('plugin/img/pdf.png') }}" />
                                </div>
                                <div class="col-md-10">
                                    <p class="description">Voluptatum deleniti atque corrupti</p>
                                    <div style="margin-top:-3em;font-size:9px;color:rgb(255, 255, 255);"><img src="{{ asset('plugin/img/calendar.png') }}" /> 23/03/2018 | Tamaño: 2kb</div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- #call-to-action -->

        <!-- Team Section -->
        <section id="team">
            <div class="container">
                <div class="section-header wow fadeInUp">
                    <h3>Inmediatos Superiores</h3>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{ asset('plugin/img/team-1.jpg') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="{{ asset('plugin/img/team-2.jpg') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="{{ asset('plugin/img/team-3.jpg') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="{{ asset('plugin/img/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- #team -->

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="section-bg wow fadeIn">
            <div class="container">

                <div class="section-header">
                    <h3>Contactos</h3>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Dirección</h3>
                            <address>La Paz, Zona Obrajes, Calle 14 Nro. 490</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Número de Contacto</h3>
                            <p><a href="">(+591) 2 2129838 - (+591) 2 2128772</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Correo Electrónico</h3>
                            <p><a href="mailto:info@example.com">info@fonabosque.gob.bo</a></p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- #contact -->

    </main>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="{{ asset('plugin/img/finanzas.png') }}" /><br>
                        <img src="{{ asset('plugin/img/mdryt.png') }}" /><br>
                        <img src="{{ asset('plugin/img/mtilcc.png') }}" />
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Enlaces a Ministerios</h4>
                        <ul>
                            <li><i class="ion-link"></i> <a href="http://www.mmaya.gob.bo">Ministerio de Medio Ambiente y Aguas</a></li>
                            <li><i class="ion-link"></i> <a href="https://sigep.sigma.gob.bo">Ministerio de Econonía y Finanzas Públicas</a></li>
                            <li><i class="ion-link"></i> <a href="http://www.">Ministerio de Desarrollo Rural y Tierras</a></li>
                            <li><i class="ion-link"></i> <a href=".">Ministerio de la Presidencia</a></li>
                            <li><i class="ion-link"></i> <a href=".">Ministerio de Comunicación</a></li>
                            <li><i class="ion-link"></i> <a href=".">Ministerio de Transparencia Institucional y Lucha Contra la Corrupción</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-contact">
                        <h4>Contacto</h4>
                        <p>
                            La Paz, Zona Obrajes Calle 14 Nro. 490
                            <strong>Teléfono:</strong> (+591) 2 2129838 - (+591) 2 2128772<br>
                            <strong>Correo Electrónico:</strong> info@fonabosque.gob.bo<br>
                        </p>

                        <div class="social-links">
                            <a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/" target="_blank" class="linkedin"><i class="fa fa-youtube"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <img src="{{ asset('plugin/img/mmaya.png') }}" /><br>
                        <img src="{{ asset('plugin/img/fonabosque.png') }}" /><br>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright 2018 | <strong>Tecnologías de Información</strong> | Intranet FONABOSQUE | @utor: EAC
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('plugin/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugin/lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('plugin/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('plugin/lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('plugin/lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('plugin/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('plugin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('plugin/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('plugin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('plugin/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('plugin/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('plugin/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
    <script src="{{ asset('plugin/js/main.js') }}"></script>
</body>

</html>