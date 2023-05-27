<!--Inician sesiones-->
<?php session_start();
    //Incluimos el Archibos Auth de la carpeta clases
    include "../../clases/Auth.php";
    //Declaramos variables y mandamos a traer del formulrio los datos mediante post
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //Herencia de funcion
    $Auth = new Auth();
    
    //Si se puede logeuar, nos mandara a la pagina de inicio 
    if ($Auth->logear($usuario, $password)) {
        header("location:../../vistas/inicio.php");
        
    //si no se puede loguear, nos imprimira este mensaje
    } else {
        echo "No se pudo logear";
    }

?>