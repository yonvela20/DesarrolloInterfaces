<?php
    include 'controller/connection.php';

    $id = $_POST['id'];

    $consultaNombre = "SELECT `nombre_articulo` FROM `Articulos` WHERE `id_articulo` = ".$id;
    $selectNombre = mysqli_query($conn, $consultaNombre);
    $nombre = mysqli_fetch_row($selectNombre);

    $consultaPrecio = "SELECT `precio_articulo` FROM `Articulos` WHERE `id_articulo` = ".$id;
    $selectPrecio = mysqli_query($conn, $consultaPrecio);
    $precio = mysqli_fetch_row($selectPrecio);

    $consultaDescripcion = "SELECT `desc_articulo` FROM `Articulos` WHERE `id_articulo` = ".$id;
    $selectDescripcion = mysqli_query($conn, $consultaDescripcion);
    $descripcion = mysqli_fetch_row($selectDescripcion);
?>