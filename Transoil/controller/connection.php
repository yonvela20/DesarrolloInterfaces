<?php 

$servername = "localhost";
$user = "root";
$pass = null;
$dbname = "Transoil";

// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$consultaSelect = "SELECT * FROM `articulos` ";
$consultaNombre = "SELECT `nombre_articulo` FROM `articulos`";
$id;
$descripcion; 
$precio; 

$select = mysqli_query($conn, $consultaSelect);
$nombre = mysqli_query($conn, $consultaNombre);

$nombre2 = mysqli_fetch_row($nombre);

var_dump($nombre2[0]);

$i = 0;
while($data = mysqli_fetch_row($select)){
    
    ?>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                <title>Placeholder</title>
                <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
            </svg>
            <form action='visualizar_productos.php' method='POST'>
                <div class="card-body"> 
                    <p class="card-text">
                    <?= $nombre2[0]?><input type='hidden' name='id' value='producto 1'>
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

<?php 
$i++;
} 
?>