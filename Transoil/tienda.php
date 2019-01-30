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
    <!-- Para añadir un producto copiar y pegar un nuevo producto dentro del div con clase "row" -->
    <div class="album py-5">
        <div class="container tienda-transoil">
            <div class="row">

                <!-- Esto es un producto -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
                        </svg>
                        <form action='visualizar_productos.php' method='POST'>
                            <div class="card-body">
                                <p class="card-text">
                                    producto 1<input type='hidden' name='nombre' value='producto 1'>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <input class="btn btn-primary" type='submit'>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Aqui acaba el producto -->

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
                        </svg>
                        <form action='visualizar_productos.php' method='POST'>
                            <div class="card-body">
                                <p class="card-text">
                                    producto 2<input type='hidden' name='nombre' value='producto 2'>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <input class="btn btn-primary" type='submit'>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
                        </svg>
                        <form action='visualizar_productos.php' method='POST'>
                            <div class="card-body">
                                <p class="card-text">
                                    producto 3<input type='hidden' name='nombre' value='producto 3'>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <input class="btn btn-primary" type='submit'>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
                        </svg>
                        <form action='visualizar_productos.php' method='POST'>
                            <div class="card-body">
                                <p class="card-text">
                                    producto 4<input type='hidden' name='nombre' value='producto 4'>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <input class="btn btn-primary" type='submit'>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
                        </svg>
                        <form action='visualizar_productos.php' method='POST'>
                            <div class="card-body">
                                <p class="card-text">
                                    producto 5<input type='hidden' name='nombre' value='producto5'>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <input class="btn btn-primary" type='submit'>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
                        </svg>
                        <form action='visualizar_productos.php' method='POST'>
                            <div class="card-body">
                                <p class="card-text">
                                    producto 6<input type='hidden' name='nombre' value='producto6'>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <input class="btn btn-primary" type='submit'>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
                        </svg>
                        <form action='visualizar_productos.php' method='POST'>
                            <div class="card-body">
                                <p class="card-text">
                                    producto 7<input type='hidden' name='nombre' value='producto7'>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <input class="btn btn-primary" type='submit'>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
                        </svg>
                        <form action='visualizar_productos.php' method='POST'>
                            <div class="card-body">
                                <p class="card-text">
                                    producto 8<input type='hidden' name='nombre' value='producto8'>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <input class="btn btn-primary" type='submit'>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
                        </svg>
                        <form action='visualizar_productos.php' method='POST'>
                            <div class="card-body">
                                <p class="card-text">
                                    producto 9<input type='hidden' name='nombre' value='producto9'>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <input class="btn btn-primary" type='submit'>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

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