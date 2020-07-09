<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Plantilla prueba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class="colorlib-loader"></div>
    <div id="page">

        <!-- Sección  Navbar  principal  [Mauricio: 08-07-20] -->
        <section>
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-2">
                            <!--   <div id="colorlib-logo"><a href="index.html">Tour</a></div> -->
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li class="active"><a href="index.php">Inicio</a></li>
                                <li class="has-dropdown">
                                    <a href="tours.html">Excusiones</a>
                                    <ul class="dropdown">
                                        <li ><a href="#">Destino</a></li>
                                        <li><a href="#">Otros</a></li>
                                        <li><a href="#">Hoteles</a></li>
                                        <li><a href="#">Reservas</a></li>
                                    </ul>
                                </li>
                                <li><a href="hotel-room.html">Hoteles</a></li>
                                <li><a href="Restaurantes.html">Restaurantes</a></li>s
                                <li><a href="services.html">servicios</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="about.html">Acerca De</a></li>
                                <li><a href="contact.html">Contactenos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        </section>

        <!-- Sección aside contenedor de imagenes  Carrusel Banner Principal  [Mauricio: 08-07-20]  -->
        <section>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(img/img-banners/imagen1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Escoja los dias de Excursiones</h2>
                                        <h1>Inicie su visita por el eje Cafetero</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image:url(img/img-banners/imagen2.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Disfrute sus mejores Días</h2>
                                        <h1>En el Eje cafetero</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(img/img-banners/imagen3.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Explore todas las bellezas</h2>
                                        <h1>Su cultura y medio ambiente</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(img/img-banners/imagen4.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>La Mejor experiencia</h2>
                                        <h1>El mejor viaje de todos</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        </section>
        <!-- Sección Filtro Items Principales  [Mauricio: 08-07-20] -->
    <section>
            <div id="colorlib-reservation">
                <!-- <div class="container"> -->
                <div class="row">
                    <div class="search-wrap">
                        <div class="container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#flight"><i class="fa fa-mountain"></i>Finca</a></li>
                                <li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
                                <li><a data-toggle="tab" href="#car"><i class="fas fa-utensils"></i> Restaurantes</a></li>
                                <li><a data-toggle="tab" href="#cruises"><i class="fas fa-road"></i></i>Excursiones</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="flight" class="tab-pane fade in active">
                                <form method="post" class="colorlib-form">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="date">Donde:</label>
                                                <div class="form-field">
                                                    <input type="text" id="location" class="form-control"
                                                        placeholder="Buscar ubicación">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="date">Fecha registro :</label>
                                                <div class="form-field">
                                                    <i class="icon icon-calendar2"></i>
                                                    <input type="text" id="date" class="form-control date"
                                                        placeholder="Fecha">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="date">Fecha salida:</label>
                                                <div class="form-field">
                                                    <i class="icon icon-calendar2"></i>
                                                    <input type="text" id="date" class="form-control date"
                                                        placeholder="Revisa fecha">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="guests">Huespedes</label>
                                                <div class="form-field">
                                                    <i class="icon icon-arrow-down3"></i>
                                                    <select name="people" id="people" class="form-control">
                                                        <option value="#">1</option>
                                                        <option value="#">2</option>
                                                        <option value="#">3</option>
                                                        <option value="#">4</option>
                                                        <option value="#">5+</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="submit" name="submit" id="submit" value="Encontrar Fincas"
                                                class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="hotel" class="tab-pane fade">
                                <form method="post" class="colorlib-form">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="booknow">
                                                <h2>Reservar</h2>
                                                <span>Mejores precios en línea</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="date">Registrarse:</label>
                                                <div class="form-field">
                                                    <i class="icon icon-calendar2"></i>
                                                    <input type="text" id="date" class="form-control date"
                                                        placeholder="Fecha registro">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="date">fecha salida:</label>
                                                <div class="form-field">
                                                    <i class="icon icon-calendar2"></i>
                                                    <input type="text" id="date" class="form-control date"
                                                        placeholder="Fecha ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="guests">Huespedes</label>
                                                <div class="form-field">
                                                    <i class="icon icon-arrow-down3"></i>
                                                    <select name="people" id="people" class="form-control">
                                                        <option value="#">1</option>
                                                        <option value="#">2</option>
                                                        <option value="#">3</option>
                                                        <option value="#">4</option>
                                                        <option value="#">5+</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="submit" name="submit" id="submit" value="Buscar Hotel"
                                                class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="car" class="tab-pane fade">
                                <form method="post" class="colorlib-form">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="date">Donde:</label>
                                                <div class="form-field">
                                                    <input type="text" id="location" class="form-control"
                                                        placeholder="Buscar ubicación">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="date">Fecha inicio:</label>
                                                <div class="form-field">
                                                    <i class="icon icon-calendar2"></i>
                                                    <input type="text" id="date" class="form-control date"
                                                        placeholder="Revisar fecha">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="date">Fecha regreso:</label>
                                                <div class="form-field">
                                                    <i class="icon icon-calendar2"></i>
                                                    <input type="text" id="date" class="form-control date"
                                                        placeholder="Fecha regreso">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="submit" name="submit" id="submit" value="Encontrar vehiculo"
                                                class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="cruises" class="tab-pane fade">
                                <form method="post" class="colorlib-form">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="date">Donde:</label>
                                                <div class="form-field">
                                                    <input type="text" id="location" class="form-control"
                                                        placeholder="Buscar ubicación">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="date">Fecha inicio:</label>
                                                <div class="form-field">
                                                    <i class="icon icon-calendar2"></i>
                                                    <input type="text" id="date" class="form-control date"
                                                        placeholder="Fecha inicio">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="guests">Categorias</label>
                                                <div class="form-field">
                                                    <i class="icon icon-arrow-down3"></i>
                                                    <select name="category" id="category" class="form-control">
                                                        <option value="#">Suite</option>
                                                        <option value="#">Super de lujo</option>
                                                        <option value="#">Con balcon</option>
                                                        <option value="#">Económica</option>
                                                        <option value="#">De Lujo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="submit" name="submit" id="submit" value="Encontrar cruceros"
                                                class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carrusel inicial [Mauricio]  -->
    <section>
        <div id="colorlib-hotel" style="padding:0px;">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                        <h2>Hoteles Recomendados</h2>
                        <p>Disfruta de los mejores descuentos</p>
                    </div> -->
                </div>
                <br>
                <div class="col-md-12 col-md-offset-0 heading2 animate-box">
                    <h2 class="text-center">Hoteles Recomendados</h2>
                    </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="hotel-entry">
                                    <a href="hotels.html" class="hotel-img"
                                        style="background-image: url(img/img-generales/img-propias/slider-inicial/img1.jpg);">
                                        <p class="price"><span>$120</span><small> /Noche</small></p>
                                    </a>
                                    <div class="desc">
                                        <p class="star"><span><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                        <h3><a href="#">Finca la Pajita</a></h3>
                                        <span class="place">Eje Cafetero, Colombia</span>
                                        <p>Finca la Pajita presta el servicio de alojamiento en Casa campestre de 2
                                            niveles</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hotel-entry">
                                    <a href="hotels.html" class="hotel-img"
                                        style="background-image: url(img/img-generales/img-propias/slider-inicial/img2.jpg);">
                                        <p class="price"><span>$120</span><small> /Noche</small></p>
                                    </a>
                                    <div class="desc">
                                        <p class="star"><span><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                        <h3><a href="#">Finca El encanto </a></h3>
                                        <span class="place">Eje Cafetero, Colombia</span>
                                        <p>Finca El encanto presta el servicio de alojamiento en Casa campestre de 2
                                            niveles</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hotel-entry">
                                    <a href="hotels.html" class="hotel-img"
                                        style="background-image:  url(img/img-generales/img-propias/slider-inicial/img3.jpg);">
                                        <p class="price"><span>$120</span><small> /Noche</small></p>
                                    </a>
                                    <div class="desc">
                                        <p class="star"><span><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                        <h3><a href="#">Tours Eje cafetero</a></h3>
                                        <span class="place">Eje Cafetero, Colombia</span>
                                        <p>Esta Reserva Natural recibe a profesionales y aficionados del mundo de las
                                            aves.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hotel-entry">
                                    <a href="hotels.html" class="hotel-img"
                                        style="background-image: url(img/img-generales/img-propias/slider-inicial/img4.jpg);">
                                        <p class="price"><span>$120</span><small> /Noche</small></p>
                                    </a>
                                    <div class="desc">
                                        <p class="star"><span><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i><i
                                                    class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                                        <h3><a href="#">Finca el cielo</a></h3>
                                        <span class="place">Eje Cafetero, Colombia</span>
                                        <p>Finca El encanto presta el servicio de alojamiento en Casa campestre de 2
                                            niveles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
		<div id="colorlib-services">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-3 animate-box text-center aside-stretch">
						<div class="services">
							<span class="icon">
								<i class="flaticon-around"></i>
							</span>
							<h3>Amazing Travel</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-boat"></i>
							</span>
							<h3>Our Cruises</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-car"></i>
							</span>
							<h3>Book Your Trip</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-postcard"></i>
							</span>
							<h3>Nice Support</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
				</div>
			</div>
		</div>
-->
<br>
                <div class="col-md-12 col-md-offset-0 heading2 animate-box">
                    <h2 class="text-center">Fincas destacadas</h2>
                    </div>
<!-- Seccion Galeria Principal contiene todo el contenido de imagenes de la galeria principal [Mauricio: 08/07/2020] -->
    <section>
    <div class="colorlib-tour colorlib-light-grey">
        <!--
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Popular Destination</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
			</div>
			-->
        <div class="tour-wrap">
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img"
                    style="background-image: url(img/img-generales/img-propias/img-catalog/img1.jpg);">
                </div>
                <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i></span></p>
                    <h2>Finca Los colores</h2>
                    <span class="city">Eje cafetero, Colombia</span>
                    <span class="price">$450</span>
                </span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img"
                    style="background-image: url(img/img-generales/img-propias/img-catalog/img2.jpg);">
                </div>
                <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i></span></p>
                    <h2>finca Rosario</h2>
                    <span class="city">Eje cafetero, Colombia</span>
                    <span class="price">$450</span>
                </span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img"
                    style="background-image: url(img/img-generales/img-propias/img-catalog/img3.jpg);">
                </div>
                <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i></span></p>
                    <h2>Finca Esperanza</h2>
                    <span class="city">Eje cafetero, Colombia</span>
                    <span class="price">$450</span>
                </span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img"
                    style="background-image: url(img/img-generales/img-propias/img-catalog/img4.jpg);">
                </div>
                <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i></span></p>
                    <h2>Finca el tesoro</h2>
                    <span class="city">Eje cafetero, Colombia</span>
                    <span class="price">$450</span>
                </span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img"
                    style="background-image: url(img/img-generales/img-propias/img-catalog/img5.jpg);">
                </div>
                <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i></span></p>
                    <h2>Finca Laura</h2>
                    <span class="city">Eje cafetero, Colombia</span>
                    <span class="price">$450</span>
                </span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img"
                    style="background-image: url(img/img-generales/img-propias/img-catalog/img6.jpg);">
                </div>
                <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i></span></p>
                    <h2>Finca Alto Bonito</h2>
                    <span class="city">Athens, Greece</span>
                    <span class="price">$450</span>
                </span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img"
                    style="background-image: url(img/img-generales/img-propias/img-catalog/img7.jpg);">
                </div>
                <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i></span> 545 Reviews</p>
                    <h2>Finca el palacio</h2>
                    <span class="city">Eje cafetero, Colombia</span>
                    <span class="price">$450</span>
                </span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img"
                    style="background-image: url(img/img-generales/img-propias/img-catalog/img8.jpg);">
                </div>
                <span class="desc">
                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i><i class="icon-star-full"></i><i
                                class="icon-star-full"></i></span></p>
                    <h2>Finca caleñita</h2>
                    <span class="city">Athens, Greece</span>
                    <span class="price">$450</span>
                </span>
            </a>
        </div>
    </div>
    </section>
    <!--
		<div id="colorlib-blog">
			<div class="container">
	
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Recent Blog</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
	
				<div class="blog-flex">
					<div class="f-entry-img" style="background-image: url(images/blog-3.jpg);">
					</div>
					<div class="blog-entry aside-stretch-right">
						<div class="row">
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-1.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2018</span>
										<h3>A Definitive Guide to the Best Dining</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2018</span>
										<h3>How These 5 People Found The Path to Their Dream Trip</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-4.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2018</span>
										<h3>Our Secret Island Boat Tour Is just for You</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
-->
    <!-- video corporactivo [Mauricio] -->
    <section>
        <div id="colorlib-intro" class="intro-img"
            style="background-image: url(img/img-generales/img-propias/img-catalog/img8.jpg);"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 animate-box">
                        <div class="intro-desc">
                            <div class="text-salebox">
                                <div class="text-lefts">
                                    <div class="sale-box">
                                        <div class="sale-box-top">
                                            <h2 class="number">45</h2>
                                            <span class="sup-1">%</span>
                                            <span class="sup-2"></span>
                                        </div>
                                        <h2 class="text-sale">Rebaja</h2>
                                    </div>
                                </div>
                                <div class="text-rights">
                                    <h3 class="title">Date prisa oferta limitada!</h3>
                                    <p>Las mejores ofertas en alojamientos excursiones y alimentación</p>
                                    <!-- <p><a href="#" class="btn btn-primary">Book Now</a> <a href="#" class="btn btn-primary btn-outline">Read more</a></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="video-wrap">
                            <div class="video colorlib-video"
                                style="background-image: url(img/img-generales/img-propias/img-catalog/img8.jpg);">
                                <a href="https://www.youtube.com/watch?v=gIXWXE-qhsk" class="popup-vimeo"><i
                                        class="icon-video"></i></a>
                                <div class="video-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="colorlib-tour">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Most Popular Travel Countries</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="f-tour">
							<div class="row row-pb-md">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-1.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-2.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-3.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-4.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3>Italy, Europe</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p><br>
											</div>
											<div class="col-md-12">
												<h4>Best Tours City</h4>
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Rome</a></li>
															<li><a href="#">Milan</a></li>
															<li><a href="#">Genoa</a></li>
															<li><a href="#">Verona</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Venice</a></li>
															<li><a href="#">Bologna</a></li>
															<li><a href="#">Trieste</a></li>
															<li><a href="#">Florence</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Palermo</a></li>
															<li><a href="#">Siena</a></li>
															<li><a href="#">San Marino</a></li>
															<li><a href="#">Naples</a></li>
														</ul>
													</div>
												</div>
												<p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="f-tour">
							<div class="row">
								<div class="col-md-6 col-md-push-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-5.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-6.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-7.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/tour-8.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box col-md-pull-6 text-right">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3>Athens, Greece</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p><br>
											</div>
											<div class="col-md-12">
												<h4>Best Tours City</h4>
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Rome</a></li>
															<li><a href="#">Milan</a></li>
															<li><a href="#">Genoa</a></li>
															<li><a href="#">Verona</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Venice</a></li>
															<li><a href="#">Bologna</a></li>
															<li><a href="#">Trieste</a></li>
															<li><a href="#">Florence</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Palermo</a></li>
															<li><a href="#">Siena</a></li>
															<li><a href="#">San Marino</a></li>
															<li><a href="#">Naples</a></li>
														</ul>
													</div>
												</div>
												<p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
    <!--  Seccion video
<div class="container-fluid fh5co_video_news_bg pb-4">
    <div class="container animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">Video News</div>
        </div>
        <div>
            <div class="owl-carousel owl-theme owl-loaded owl-drag" id="slider3"> 
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1494px;"><div class="owl-item active" style="width: 363.333px; margin-right: 10px;"><div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video" width="100%" height="200" src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
                                <img src="images/ariel-lustre-208615.jpg" alt="">
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide" id="play-video">
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                        <span><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                            <span class="">The top 10 funniest videos on YouTube </span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 363.333px; margin-right: 10px;"><div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video_2" width="100%" height="200" src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_2">
                                <img src="images/39-324x235.jpg" alt=""></div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_2" id="play-video_2">
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                        <span><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                            <span class="">The top 10 embedded YouTube videos this month</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 363.333px; margin-right: 10px;"><div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video_3" width="100%" height="200" src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_3">
                                <img src="images/joe-gardner-75333.jpg" alt=""></div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_3" id="play-video_3">
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                        <span><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                            <span class="">The top 10 best computer speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 363.333px; margin-right: 10px;"><div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video_4" width="100%" height="200" src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_4">
                                <img src="images/vil-son-35490.jpg" alt="">
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_4" id="play-video_4">
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                        <span><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                <span class="">The top 10 best computer speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
        </div>
    </div>
</div>
-->
    <!--
		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
-->
<!-- Footer Principal index.php [Mauricio: 08/] -->
<section>
<footer id="colorlib-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 colorlib-widget">
                    <h4>Agencia de turismo</h4>
                    <p>La mejor opción para vivir tu mejor experiencia en el eje cafetero.</p>
                    <p>
                        <ul class="colorlib-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </p>
                </div>
                <div class="col-md-3 colorlib-widget">
                    <h4>Reserva ahora</h4>
                    <p>
                        <ul class="colorlib-footer-links">
                            <li><a href="./index.php">Finca</a></li>
                            <li><a href="./hotels.html">Hotel</a></li>
                            <li><a href="./restaurantes.html">Restaurantes</a></li>
                            <li><a href="./Tours.html">Excursiones</a></li>
                        </ul>
                    </p>
                </div>
                <div class="col-md-3 colorlib-widget">
                    <h4>Ofertas principales</h4>
                    <p>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">Finca El Cielo</a></li>
                            <li><a href="#">Finca La Pajita</a></li>
                            <li><a href="#">Finca El Encanto</a></li>
                            <li><a href="#">Tours Eje Cafetero</a></li>
                        </ul>
                    </p>
                </div>
                <!-- <div class="col-md-2">
                    <h4>Blog Post</h4>
                    <ul class="colorlib-footer-links">
                        <li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
                        <li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
                        <li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
                    </ul>
                </div> -->

                <div class="col-md-3 col-md-push-1">
                    <h4>Contact Information</h4>
                    <ul class="colorlib-footer-links">
                        <li>Medellin <br> Antioquia</li>
                        <li><a href="tel://1234567920">+350 6686908</a></li>
                        <li><a href="mailto:info@yoursite.com">developersmr3@gmail.com</a></li>
                        <li><a href="./contact.html">nombreDelSitio.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart2"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                        <span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a
                                href="http://pexels.com/" target="_blank">Pexels.com</a></span>
                        <span class="block">Version : <a href="http://unsplash.co/" target="_blank">1.0.1.1</a></span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</section>
    </div>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
    <!-- Fonwaseme -->
    <script src="https://kit.fontawesome.com/2c5c3bec73.js "></script>

</body>

</html>