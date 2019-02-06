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
    <br>

    <!-- Contenido de la pagina -->
    
    <?php 

    $id = $_POST['id'];
    //$precio = $_POST['precio']

    
    //TODO: Que lo pille todo por la base de datos y que me muestre los datos enviados 
    ?>

<div class="card">
    <div class="row">
        <aside class="col-sm-5 border-right">
            <article class="gallery-wrap">
                
            <div class="img-big-wrap">
                    <div> <a href="#"><img src="https://s9.postimg.org/tupxkvfj3/image.jpg"></a></div>
                </div> <!-- slider-product.// -->

            </article> <!-- gallery-wrap .end// -->
        </aside>
        <aside class="col-sm-7">
            <article class="card-body p-5">
                <h3 class="title mb-3"><?= $id ?></h3>
                <p class="price-detail-wrap">
                    <span class="price h3 text-warning">
                        <span class="currency">€ </span><span class="num"> <?php //$precio ?> </span>
                    </span>
                </p> <!-- price-detail-wrap .// -->
                <dl class="item-property">
                    <dt>Descripcion</dt>
                    <dd>
                        <p>Here goes description consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco </p>
                    </dd>
                </dl>
                <dl class="param param-feature">
                    <dt>Modelo</dt>
                    <dd>12345611</dd>
                </dl> <!-- item-property-hor .// -->

                <hr>
                <div class="row">
                    <div class="col-sm-5">
                        <dl class="param param-inline">
                            <dt>Cantidad </dt>
                            <dd>
                                <select class="form-control form-control-sm" style="width:70px;">
                                    <option> 1 </option>
                                    <option> 2 </option>
                                    <option> 3 </option>
                                </select>
                            </dd>
                        </dl> <!-- item-property .// -->
                    </div> <!-- col.// -->

                </div> <!-- row.// -->
                <hr>
                <a href="#" class="btn btn-lg btn-primary text-uppercase"> Comprar</a>
                <a href="#" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i>
                    Añadir al carrito </a>
            </article> <!-- card-body.// -->
        </aside> <!-- col.// -->
    </div> <!-- row.// -->
</div> <!-- card.// -->


</div>
<!--container.//-->

    <br><br>
    <!-- Footer -->
    <?php 
        include 'footer.php';
    ?>
</body>

</html>