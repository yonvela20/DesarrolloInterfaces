    <!-- Menú de arriba -->
    <div class="menu-transoil">
        <nav class="menu-transoil navbar navbar-expand-lg navbar-light navbar-transoil">
            <a href="index.php"><img src="images/TransoilFondoEscalada.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="index.php"> Inicio </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="protocolo.php"> Reciclado de aceite </a>
                    </li>
                    <li class="nav-item dropdown dropdownTransoil">
                        <a class="nav-link dropdown-toggle dropbtnTransoil" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </a>
                        <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item dropdown-transoil" href="recogida_aceite.php"> Recogida de aceite </a>
                            <a class="dropdown-item dropdown-transoil" href="tienda.php"> Venta de productos </a>
                            <!-- <a class="dropdown-item dropdown-transoil" href="tienda.php"> Recambios </a> -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php"> FAQ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php"> Contacto </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- header -->
    <header class="header-transoil">
        <nav class="navbar">
            <h2><?php echo strtoupper($title) ?></h2>
        </nav>
        <div class="panel-default">
            <p><a href="index.php">Transoil/</a><?php echo $title; ?></p>
        </div>
    </header>
