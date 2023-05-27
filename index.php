<!--Plantilla de bootstrap 5-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Hoja de estilo de CSS-->
    <link rel="stylesheet" href="./public/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Titulo del login-->
    <title>LOGIN USUARIO</title>
</head>
<!--Cuerpo de la pagina web-->
<body>
  <section class="vh-100">

    <div class="container-fluid h-custom">

      <div class="row d-flex justify-content-center align-items-center h-100">

        <!--Insertamos la imágen del pinguino-->
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="./public/images/linux-logo.png" class="img-fluid" alt="Sample image">
        </div>
                
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

          <!-- Iniciamos el formulario de preguntas, en donde hará con los datos lo que esté
                en el archivo loguear.php dentro de la carpeta servidor, dentro de login -->
          <form action="./servidor/login/logear.php" method="post">

            <!--Titulo del login-->
            <div class="divider d-flex align-items-center my-4">
              <h4>INICIA SESIÓN</h4>
            </div>
            
            <!--Seccion en donde pide e ingresas el usuario-->
            <div class="form-outline mb-4">
              <label class="form-label" for="usuario">Usuario</label>

              <!--En este input se agregó:
              autofocus: La función de este atributo es poner el cursor de manera activa en un input.
              required: Nos permite hacer que un input de un formulario sea obligatorio-->
              <input type="text" class="form-control form-control-lg" name="usuario" id="usuario" 
              placeholder="Ingresa un usuario válido" autofocus required>
            </div>

            <!--Input en donde se ingresará la contraseña-->
            <div class="form-outline mb-3">
              <label class="form-label" for="password">Contraseña</label>

              <!--Se agrega en type password, para que cuando la ingrese el usuario,
                  no se vea reflejada en la pantalla-->
              <input type="password" name="password" id="password" class="form-control form-control-lg" 
              placeholder="Enter password" required>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <!--Boton de enviar datos al archivo registro.php-->
              <button type="submit" class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2">Login</button>
              <!--Para los usuarios que no tienen cuenta, dando clic los manda a la pagina de registro,
                  que está en la carpeta vistas-->  
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? 
                  <a href="./vistas/registro.php" class="link-danger">Register</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>