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
        $title = "Tienda";
        include 'cabecera.php';
    ?>
    <br>

    <!-- Contenido de la pagina -->
    <!-- Para añadir un producto copiar y pegar un nuevo producto dentro del div con clase "row" -->
    <div class="album py-5">
        <div class="container tienda-transoil">
            <div class="row">
                <?php 
                    //Se rellena en base a los articulos de la bbdd
                    //FIXME: Que salgan del mismo tamaño las fotos 
                    include './model/tienda_model.php';
                ?>
                
            </div>
        </div>
    </div>

    </main>

    <br><br>
    <!-- Footer -->
    <?php 
        include 'footer.php';
    ?>
</body>

</html>