<?php session_start(); 
  if (!isset($_SESSION['usuario'])) {
    header("location:../index.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../public/css/calculadora.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inicio </title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../public/images/debian-logo.jpg" alt="..." height="36">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a style="color:aqua" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['usuario']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../servidor/login/logout.php">Salir del sistema</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container">
  <div class="row">

  <div>
      <br>
      <!--Titulo de nuestra pagina web-->
      <h2 class="text-center">Calculadora de Ezequiel</h2>
      <!--Input en donde se imprimer los valores agregados y los resultados-->
      <input type="text" class="form-control" style="height: 75px;" id="display">

  </div>

  <!--Primer grupo de botones en donde deja un margen de 50 px de espacio al div de arriba-->
  <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group" style="margin-top: 30px;">
      
      <!--onclick = funcion declarad en el archivo js, que realizara el boton al hacer clic en el-->

      <!--Boton de borrar todos los valores o resultados obtenidos-->
      <button class="btn btn-dark" value="C" onclick="borrar()">AC</button>
      <!--Boton que elimina el ultimo valor agregado-->
      <button class="btn btn-outline-dark" onclick="eliminarUltimo()"><-</button>
  </div>

  <!--Segundo grupo de botones en donde deja un margen de 10 px de espacio al div de arriba-->
  <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group" style="margin-top: 10px;">
      <!--Agrega el numero 7-->
      <button class="btn btn-outline-info" value="7" onclick="agregar('7')">7</button>
      <!--Agrega el numero 8-->
      <button class="btn btn-outline-info" value="8" onclick="agregar('8')">8</button>
      <!--Agrega el numero 9-->
      <button class="btn btn-outline-info" value="9" onclick="agregar('9')">9</button>
      <!--Boton de division-->
      <button class="btn btn-info" value="/" onclick="agregar('/')">/</button>
  </div>

  <!--Tercer grupo de botones en donde deja un margen de 10 px de espacio al div de arriba-->
  <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group" style="margin-top: 10px;">
      <!--Agrega el numero 4-->
      <button class="btn btn-outline-info" value="4" onclick="agregar('4')">4</button>
      <!--Agrega el numero 5-->
      <button class="btn btn-outline-info" value="5" onclick="agregar('5')">5</button>
      <!--Agrega el numero 6-->
      <button class="btn btn-outline-info" value="6" onclick="agregar('6')">6</button>
      <!--Boton de multiplicacion-->
      <button class="btn btn-info" value="*" onclick="agregar('*')">x</button>
  </div>

  <!--Cuarto grupo de botones en donde deja un margen de 10 px de espacio al div de arriba-->
  <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group" style="margin-top: 10px;">
      <!--Agrega el numero 1-->
      <button class="btn btn-outline-info" value="1" onclick="agregar('1')">1</button>
      <!--Agrega el numero 2-->
      <button class="btn btn-outline-info" value="2" onclick="agregar('2')">2</button>
      <!--Agrega el numero 3-->
      <button class="btn btn-outline-info" value="3" onclick="agregar('3')">3</button>
      <!--Agrega el boton de resta-->
      <button class="btn btn-info" value="-" onclick="agregar('-')">-</button>
  </div>

  <!--Quinto grupo de botones en donde deja un margen de 10 px de espacio al div de arriba-->
  <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group" style="margin-top: 10px;">
      <!--Agrega el punto decimal a el valor ingresado-->
      <button class="btn btn-outline-info" onclick="agregar('.')">.</button>
      <!--Agrega el numero 0-->
      <button class="btn btn-outline-info" value="0" onclick="agregar('0')">0</button>
      <!--Boton de igual, obtiene el resultado final de la operacion agregada-->                    
      <button class="btn btn-info" value="=" onclick="calcular()">=</button>
      <!--Boton de suma-->
      <button class="btn btn-info" value="+" onclick="agregar('+')">+</button>
  </div>

</div>
    <script src="../public/js/calculadora.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>