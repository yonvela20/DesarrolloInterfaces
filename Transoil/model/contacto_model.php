<?php 
require '../controller/contacto_controller.php';

//TODO: Las funciones deberían ir en una clase aparte controlador y hacer un require de esa clase en esta para que 
//sea MVC. Esto solo debería ser el modelo

//FIXME: La funcion esta va pero ahora como está configurado no. Leer "enviar_mails.txt" para mas info
if(isset($_POST['email'])){
    //Email de Transoil
    $email_to = 'yon.vela20@gmail.com';

    function died($error){
        //Aqui van los tipos de errores, mas adelante se hace
        echo "Parece que hay algun error al enviar el correo. Aqui una lista <br>";
        echo $error."<br><br>";
        echo "Por favor vuelve atrás y solucionalo";
        die();
    }

    //validacion de que todos los datos están puestos 
    if(!isset($_POST['nombre']) || !isset($_POST['email']) || !isset($_POST['mensaje']) || !isset($_POST['asunto'])){
        died("Parece que hay algun problema con la consulta enviada.");
    }

    $nombre = $_POST['nombre'];
    $email_from = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $error_mensaje = "";
    //expresion regular para validar que es un email lo introducido 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    //Expresion regular para validar que el nombre introducido es valido
    $string_exp = "/^[A-Za-z .'-]+$/";

    //Lista de errores posibles 
    if(!preg_match($email_exp, $email_from)){
        $error_mensaje = "El email introducido no es valido <br>";
    }

    if(!preg_match($string_exp, $nombre)){
        $error_mensaje = "El nombre introducido parece no ser valido <br>";
    }

    if(!preg_match($string_exp, $asunto)){
        $error_mensaje = "El asunto introducido parece no ser valido <br>";
    }

    if(strlen($mensaje) < 2){
        $error_mensaje = "El mensaje introducido no parece ser valido <br>";
    }

    if(strlen($error_mensaje) > 0){
        died($error_mensaje);
    }

    $email_mensaje = "Detalles de la consulta: \n \n";

    /**
     * @function clean_string() está en el controlador
     */

    $email_mensaje .= "Nombre: ".clean_string($nombre)."\n";
    $email_mensaje .= "Email: ".clean_string($email_from)."\n";
    $email_mensaje .= "Asunto: ".clean_string($asunto)."\n";
    $email_mensaje .= "Mensaje: ".clean_string($mensaje)."\n";

    $headers = 'From: ' .$email_from."\r\n" .
    'Reply-To: '.$email_from. "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    mail($email_to, $asunto, $mensaje, $headers);

    //mail($email_to, $asunto, $mensaje);


    //Te redirecciona a la pagina de contactos una vez enviado el correo 
    //TODO: Alguna forma que diga compadre lo has enviado maquina 

    echo "correo enviado";

    //Lo del header igual habrá que quitarlo nyeh, ya se verá 
    //header('Location: ../contacto.php');
}
?>