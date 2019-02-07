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

    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <!-- Menú de arriba -->
    <?php 
        $title = "Carrito"; 
        include 'cabecera.php';
    ?>

    <!-- Carrito -->
    <div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Productos</th>
                <th style="width:10%">Precio</th>
                <th style="width:8%">Cantidad</th>
                <th style="width:22%" class="text-center">Total</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        <tbody>

        <!-- Esto es un producto en el carrito -->
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive" /></div>
                        <div class="col-sm-10 carrito">
                            <h4 style="margin-left: 20px">Nombre del producto</h4>
                            <p style="margin-left: 20px">Descripcion del producto</p>
                        </div>
                    </div>
                </td>
                <td data-th="Price">Precio del producto</td>
                <td data-th="Quantity">
                    <input type="number" class="form-control text-center" value="1">
                </td>
                <td data-th="Subtotal" class="text-center">Precio del producto * cantidad</td>
                <td class="actions" data-th="">
                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>

            

        </tbody>
        <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Suma de todos los subtotales</strong></td>
            </tr>
            <tr>
                <td><a href="#" class="btn btn-warning btn-comprar"><i class="fa fa-angle-left"></i> Continuar comprando </a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Suma de todos los subtotales</strong></td>
                <td><a href="#" class="btn btn-success btn-block btn-comprar">Pagar<i class="fa fa-angle-right"></i></a></td>
            </tr>
        </tfoot>
    </table>
</div>
    <!-- Footer -->
    <?php 
        include 'footer.php';
    ?>
</body>

</html>