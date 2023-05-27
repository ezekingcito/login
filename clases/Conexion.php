<!--Abrimos plantilla php-->
<?php
    //creamos la clase Conexion
    class Conexion {
        //Declaramos en una variable el servidor
        public $servidor = 'localhost';
        //Declaramos en una variable el usuario
        public $usuario = 'ezequielmendoza';
        //Declaramos en una variable la contraseña
        public $password = 'ezequielroot';
        //Declaramos en una variable la base de datos
        public $database = 'login';
        //Declaramos en una variable el puerto en donde estamos trabajando
        public $port = 3306;

        //Funcion conectar
        public function conectar() {
            //mysql_connect, nos permite crear una conexión con una base de datos concreta
            return mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->password,
                $this->database,
                $this->port
            );
        }
    }

?>