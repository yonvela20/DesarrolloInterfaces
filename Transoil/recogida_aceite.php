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
                        <h2>Protocolo 1</h2>
                        <p class="lead">This is a great place to talk about your webpage. This template is purposefully
                            unstyled so you can use it as a boilerplate or starting point for you own landing page
                            designs! This template features:</p>
                        <ul>
                            <li>Clickable nav links that smooth scroll to page sections</li>
                            <li>Responsive behavior when clicking nav links perfect for a one page website</li>
                            <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in
                                the navbar</li>
                            <li>Minimal custom CSS so you are free to explore your own unique design options</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>Protocolo 2</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit
                            inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur
                            ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>Protocolo 3</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat
                            voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam
                            et repudiandae ipsa exercitationem, in, quo totam.</p>
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