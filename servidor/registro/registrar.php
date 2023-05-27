<!--Plantilla php-->
<?php 
    //Inlcuimos el archivo Auth de la carpeta Clases
    include "../../clases/Auth.php";

    //Traemos los datos del formulario por el teodo post
    $usuario = $_POST['usuario'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    //Herencia de clases
    $Auth = new Auth();

    //Si se puede loguear nos direigimos al index
    if ($Auth->registrar($usuario, $password)) {
        header("location:../../index.php");

    //Si no se puede, que imprima este mensaje
    } else {
        echo "No se pudo registrar";
    }

?>