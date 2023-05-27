<!--Palntilla de php-->
<?php 
    //Incluimos el archivo de Conexion.php
    include "Conexion.php";

    //En la clase Auth llamamos por herencia a Conexion
    class Auth extends Conexion {
        //Declaramos la funcion registrar que retornara un usuario y una contraseña
        public function registrar($usuario, $password) {
            //Declaramos la variable con la información requerida para conectarse a la base de datos
            $conexion = parent::conectar();
            //Declaramos la variable con lo que va a insertar en la tabla t_usuarios
            $sql = "INSERT INTO t_usuarios (usuario, password) 
                    VALUES (?,?)";
            $query = $conexion->prepare($sql);
            //Tipo de valor que va a recibir y los valores que va a recibir
            $query->bind_param('ss', $usuario, $password);
            //Se ejecuta
            return $query->execute();
        }

        //Declaramos la funcion logear que retornara un usuario y una contraseña
        public function logear($usuario, $password) {
            //Conexion a la base de datos
            $conexion = parent::conectar();
            $passwordExistente = "";
            //Consulta a la base de datos
            $sql = "SELECT * FROM t_usuarios 
                    WHERE usuario = '$usuario'";
            $respuesta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($respuesta) > 0) {
                $passwordExistente = mysqli_fetch_array($respuesta);
                $passwordExistente = $passwordExistente['password'];
                
                //Si se puede logear nos regresara el nombre del usuario
                if (password_verify($password, $passwordExistente)) {
                    $_SESSION['usuario'] = $usuario;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }   
    }

?>