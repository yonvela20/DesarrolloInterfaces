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
        include 'cabecera.php';
    ?>

    <!-- Acordeon  -->
    <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
        <div class="container acordeon-transoil">
            <!-- <h2>Preguntas frecuentes</h2> -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                ¿En qué consiste nuestro modelo de negocio?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                        <div class="panel-body px-3 mb-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec est egestas,
                                laoreet enim eget,
                                porttitor quam. Aliquam elit felis, tristique ac porta a, placerat vestibulum sem.
                                Praesent et turpis diam. Mauris ornare urna nec leo consequat, sed venenatis odio
                                blandit.
                                Curabitur ultrices nisi eget ornare viverra. Vestibulum turpis massa, bibendum sit amet
                                velit quis,
                                lobortis elementum ex. Donec sed tristique nunc.</p>
                            <ul>
                                <li>Donec risus turpis, aliquet ut ultrices sed, interdum ullamcorper justo. Curabitur
                                    fringilla neque vel volutpat cursus. Donec convallis nisl sed aliquam cursus.
                                    Curabitur rutrum lacinia sem at varius.</li>
                                <li>Vestibulum placerat ipsum libero, vel vehicula sapien euismod sed. </li>
                                <li>Aliquam eleifend, augue at egestas vehicula, nisi enim rhoncus velit, ut tristique
                                    mi arcu at nibh. Vestibulum posuere id massa ut condimentum.</li>
                                <li>Fusce fermentum elit sed augue efficitur ultricies. Donec sit amet ipsum massa.</li>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec est egestas,
                                laoreet enim eget,
                                porttitor quam. Aliquam elit felis, tristique ac porta a, placerat vestibulum sem.
                                Praesent et turpis diam. Mauris ornare urna nec leo consequat, sed venenatis odio
                                blandit.
                                Curabitur ultrices nisi eget ornare viverra. Vestibulum turpis massa, bibendum sit amet
                                velit quis,
                                lobortis elementum ex. Donec sed tristique nunc.</p>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec est egestas,
                                laoreet enim eget,
                                porttitor quam. Aliquam elit felis, tristique ac porta a, placerat vestibulum sem.
                                Praesent et turpis diam. Mauris ornare urna nec leo consequat, sed venenatis odio
                                blandit.
                                Curabitur ultrices nisi eget ornare viverra. Vestibulum turpis massa, bibendum sit amet
                                velit quis,
                                lobortis elementum ex. Donec sed tristique nunc.</p>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec est egestas,
                                laoreet enim eget,
                                porttitor quam. Aliquam elit felis, tristique ac porta a, placerat vestibulum sem.
                                Praesent et turpis diam. Mauris ornare urna nec leo consequat, sed venenatis odio
                                blandit.
                                Curabitur ultrices nisi eget ornare viverra. Vestibulum turpis massa, bibendum sit amet
                                velit quis,
                                lobortis elementum ex. Donec sed tristique nunc.</p>
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