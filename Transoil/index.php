<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transoil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- js de bootstrap-->
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js" />

    <!-- cdn JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- css de bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

    <!-- css Transoil -->
    <link rel="stylesheet" href="style/main.css" />

    <!-- js Transoil -->
    <!-- <script src="js/main.js"></script> -->

    <!-- Linea importantisima  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Menú de arriba -->
    <?php 
        include 'cabecera.php';
    ?>
    <!-- Slider -->
    <div id="carouselExampleControls" class="carousel slide carousel-transoil" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider_1.png" alt="First slide" max>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider_2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider_3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Resumen de contacto -->
    <div class="jumbotron jumbotron-fluid resumen-transoil">
        <div class="container">
            <h4 class="display-4">¿Dónde nos encontramos?</h4>
            <p class="lead">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Ribarroja </li>
                    <li class="list-group-item"> Calle Pascual nº 43</li>
                    <li class="list-group-item"> Telefono: 686 010 203 </li>
                    <li class="list-group-item"> Cod. Postal: 46190 </li>
                </ul>
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="contacto.php" role="button"> Solicita recogida </a>
            </p>
        </div>
    </div>

    <!-- Enlace a Reciclado de aceite -->
    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 about-left">
                    <img class="img-fluid" src="images/furgoneta1.png" alt="furgoneta">
                </div>
                <div class="col-lg-6 about-right">
                    <h2>Comprometidos con
                        el medioambiente
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor.
                    </p>
                    <a class="text-uppercase primary-btn" href="protocolo.php"> Detalles </a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <hr>
    <!-- video -->
    <script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src='https://embed.playbuzz.com/sdk.js';fjs.parentNode.insertBefore(js,fjs);}(document,'script','playbuzz-sdk'));</script><div class="playbuzz" data-id="5a2297dc-3a86-4d30-8835-06ef13c0f358" data-show-share="false" data-show-info="false"></div>
    <!-- Servicios: un enlace a la tienda, otro al formulario, otro a la tienda pero de recambios  -->
    <section class="services-area pb-120">
        <div class="container text-center">
            <div class="text-center">
                <h2> Nuestros servicios </h2>
                <br>
            </div>
            <div class="row">
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-car"></span>
                    <a href="recogida_aceite.php">
                        <h4>Recogida de aceite</h4>
                    </a>
                    <p>
                        Recogida de aceite a domicilio por encargo. Nos desplazamos donde desee para ofrecerle el mejor
                        de los servicios
                    </p>
                </div>
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-briefcase"></span>
                    <a href="tienda.php">
                        <h4> Venta de productos de limpieza </h4>
                    </a>
                    <p>
                        Disponibilidad de productos de limpieza de primera calidad para el mantenimiento de su local
                    </p>
                </div>
                <div class="col-lg-4 single-service">
                    <span class="lnr lnr-bus"></span>
                    <a href="tienda.php">
                        <h4> Venta de recambios y electrodomesticos </h4>
                    </a>
                    <p>
                        Venta de electrodomésticos principalmente culinarios así como filtros de campanas y recambios
                        tanto a nivel industrial como doméstico
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!--Google map-->
    <div class="container text-center">
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <h2>Consulte su disponibilidad</h2>
            <iframe src="https://maps.google.com/maps?q=valencia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                style="border:0" width="80%" height="80%" allowfullscreen></iframe>
        </div>
        <br>
    </div>
    <!-- Footer -->
    <?php 
        include 'footer.php';
    ?>
</body>

</html>