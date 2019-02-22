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

<body>
    <!-- Menú de arriba -->
    <?php 
        $title = "Recogida de aceite";
        include 'cabecera.php';
    ?>
    <br>
    <!-- Contenido de la pagina  -->
    <div class="protocolo-transoil">
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>Plan de residuos urbanos</h2>
                        <p class="lead">Con la redacción y tramitación del Plan de los Residuos Urbanos y No Peligrosos de la Comunidad Valenciana, aprobado por Decreto nº48/2003 de 23 de mayo, se da cumplimiento a las obligaciones en materia de planificación de la Comunidad Valenciana explícitas en la Ley 1/1995, de protección del Medio Ambiente de la Comunidad Valenciana, Ley 10/1998, de residuos y la Ley 11/1997 de envases y residuos de envases.:</p>
                        <ul>
                            <li>Eliminación de un residuo altamente contaminantede la red de alcantarillado.</li>
                            <li>Facilidad de la reutilización del agua depurada.</li>
                            <li>No obstrucción de tuberías.</li>
                            <li>Disminución de la probabilidad de proliferación de organismos perjudiciales para la salud.</li>
                            <li>Reducción de sustancias nocivas en la combustión respecto a la combustión de productos derivados del petróleo.</li>
                            <li>Abaratamiento de la depuración de aguas residuales.</li>
                            <li>Desarrollo de tecnologías en España para la fabricación de biocombustibles.</li>
                            <li>Reducción de la dependencia energética con el exterior.</li>
                            <li>Creación de puestos de trabajo en el área de gestióndel aceite y fabricación de biocombustibles. </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>El contenedor</h2>
                        <p class="lead">Las botellas se depositan a granel en unos contenedores especialesubicados siempre en un lugar cerrado y vigilado. Estos contenedores disponen de unos carros de transporte para que el gestor los traslade a la planta de reciclaje y valoración.Una vez allí, las botellas llenas de aceite se van introduciendo en una máquina que las rompe y extrae el aceite y en el tramo final, tritura la botella rota para convertirla en granza de plástico regenerado, de forma que la botella también es reciclada.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>Documentación</h2>
                        <p class="lead">Realizaremos la entrega de toda la documentación exigible por normativa: Contrato de servicios, Albarán de seguimiento del residuo, certificado del destino final del residuo, etc.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <?php 
        include 'footer.php';
    ?>
</body>

</html>