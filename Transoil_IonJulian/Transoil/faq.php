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
        $title = "Faq";
        include 'cabecera.php';
    ?>

    <!-- Acordeon  -->
    <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
        <div class="container acordeonTransoil">
            <!-- <h2>Preguntas frecuentes</h2> -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                        <h3 class="panel-title">
                            <a class="collapsed acordeon-transoil" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                ¿En qué consiste nuestro modelo de negocio?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                        <div class="panel-body px-3 mb-4">
                            <p>Desde 2002 disfrutamos de la confianza de miles de establecimientos de hostelería  en toda el área  de Levante. Consúltenos para servicio en otras comunidades. 
                                Nuestro negocio consiste en:
                            </p>
                            <ul>
                                <li>Acordamos una recogida y acudimos a tu negoci.</li>
                                <li>Recogemos el aceite usado de acuerdo con la normativa vigente y lo transportamos a la planta de reciclaje.</li>
                                <li>Te pagamos por la cantidad extraida.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                ¿Qué hacemos con el aceite recogido?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                        <div class="panel-body px-3 mb-4">
                            <p>El proceso comienza cuando el operario de reciclaceite, retira el bidón de aceite usado del local, se transporta en un vehículo cuyo nº de gestor de transportista aparece en la web de Conselleria, (3067/T02/CV) se descarga en la planta de almacenamiento y valorización ( RECICLAMAS) 458/V/RNP/CV, donde se trata el aceite calentándolo y separando las impurezas y aguas del mismo aceite y se carga en cisternas totalmente estancas para transportarlas a la planta de BIODIESEL donde se transforma en combustible ecológico.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                ¿Qué hacer cuando contratas nuestros servicios?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                        <div class="panel-body px-3 mb-4">
                            <p>La empresa gestora debe hacerle un contrato informativo , donde indica el numero de gestor autorizado , un albarán de recogida numerado donde indique los kilos recogidos, y trimestralmente un informe  o certificado con los kilos totales.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                ¿Cuáles son los beneficios de contratar nuestro servicio de recogida de aceite?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                        <div class="panel-body px-3 mb-4">
                            <p>El aceite es un residuo altamente contaminante ya que 1 solo litro de aceite usado contamina mas de 1.000 litros de agua,  por eso no se debería tirar por los desagües y por que encarece los costes de las depuradoras. 
                            No sólo retiramos el residuo de aceite con las máximas garantías y documentando su aceptación,  entre otros también ofrecemos servicios de limpieza de filtros de campana. Pregúntenos por nuestras  ofertas.  </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <?php 
        include 'footer.php';
    ?>
</body>

</html>