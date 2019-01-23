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

    <!-- cdn de bootstrap css -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous"/> -->

    <!-- css de bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

    <!-- css Transoil -->
    <link rel="stylesheet" href="style/main.css" />

    <!-- js Transoil -->
    <!-- <script src="js/main.js"></script> -->

    <!-- Linea importantisima  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</head>
<body class="hotfix-contacto">

<!-- cabecera -->
<?php 
    include 'cabecera.php';
?>

    <!-- Contenido de la pagina -->
    <section class="section contact-transoil">

        <!--Section heading-->
        <h2 class="section-heading h1 pt-4">Contacta con nosotros</h2>
        <!--Section description-->
        <p class="section-description">¿Tienes alguna pregunta? ¿Quieres concretar una cita? ¡No dudes en preguntarnos!</p>

        <div class="row">
            <!--Grid column-->
            <div class="col-md-8 col-xl-9">
                <form id="contact-form" name="contact-form">
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="text" id="nombre" name="nombre" class="form-control">
                                <label for="nombre" class="">Tu nombre</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Tu email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <input type="text" id="asunto" name="asunto" class="form-control">
                                <label for="asunto" class="">Asunto</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="mensaje" name="mensaje" rows="2" class="form-control md-textarea"></textarea>
                                <label for="mensaje">Tu mensaje</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="center-on-small-only">
                    <a class="btn btn-primary">Enviar</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 col-xl-3">
                <ul class="contact-icons">
                    <li><i class="fa fa-map-marker fa-2x"></i>
                        <p> C/Pascual nº 43</p>
                    </li>

                    <li><i class="fa fa-phone fa-2x"></i>
                        <p>Tlf: 686 010 203</p>
                    </li>

                    <li><i class="fa fa-envelope fa-2x"></i>
                        <p>transoil_valencia@gmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
    </section>

    <br><br>
    <!-- Footer -->
        <!-- Footer Links -->
       <?php 
        include  'footer.php';
       ?>
</body>

</html>