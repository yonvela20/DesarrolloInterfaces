<?php
//TODO: Hay que quitar cosas de aqui y hacer un controller pero uF

//TODO: Que pille las imagenes de la base de datos 
require 'controller/connection.php';

$consultaSelect = "SELECT * FROM `articulos` ";

$select = mysqli_query($conn, $consultaSelect);

/**
 * Recorremos la tabla articulo: En la vista vemos el nombre_articulo. Luego tenemos que recoger el id y en base a ese id mostrar el nombre
 * del producto para que asi esté todo más automatizado de cara al futuro 
 */

while($data = mysqli_fetch_assoc($select)){
    ?>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
<!--             <img src="data:image/jpeg;base64,'.base64_encode( ".$data['img_articulo']." )"/> -->
                <img class="images-tienda" src="images/producto<?= $data["id_articulo"]?>.png"/>

            <form action='visualizar_productos.php' method='POST'>
                <div class="card-body"> 
                    <p class="card-text"><b>
                    <?= $data["nombre_articulo"]?></b><input type='hidden' name='id' value='<?= $data["id_articulo"]?>'>
                    </p>
                    <p class="card-text">
                    <?= $data["precio_articulo"]?> €<input type='hidden'>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group btn-tienda">
                            <input class="btn btn-primary" type='submit' value="Ver">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php 
} 
?>