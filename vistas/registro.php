<!--Plantilla de bootstrap 5-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Hoja de estilo de CSS-->
    <link rel="stylesheet" href="../public/css/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--Titulo del registro del usuario-->
    <title>REGISTRO USUARIO</title>
</head>

<!--Cuerpo de la pagina web-->
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                
                <!--Insertamos la imágen del pinguino-->
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="../public/images/linux-logo.png" class="img-fluid" alt="Sample image">
                </div>
                
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <!-- Iniciamos el formulario de preguntas, en donde hará con los datos lo que esté
                        en el archivo registar.php dentro de la carpeta servidor, dentro de registro -->
                    <form action="../servidor/registro/registrar.php" method="post">
                        <div class="divider d-flex align-items-center my-4">
                            <!--Titulo del fprmulario-->
                            <h4>CREA UNA CUENTA</h4>
                        </div>

                         <!--En este input se agregó:
                                utofocus: La función de este atributo es poner el cursor de manera activa en un input.
                                required: Nos permite hacer que un input de un formulario sea obligatorio-->
                        <div class="form-outline mb-4">

                            <label class="form-label" for="usuario">Usuario</label>

                            <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" 
                            placeholder="Ingresa un usuario valido" autofocus required>
                            
                        </div>

                        <!--Input en donde se ingresará la contraseña-->
                        <div class="form-outline mb-3">

                            <label class="form-label" for="password">Contraseña</label>

                            <!--Se agrega en type password, para que cuando la ingrese el usuario,
                                no se vea reflejada en la pantalla-->
                            <input type="password" id="passowrd" class="form-control form-control-lg" 
                            placeholder="Enter password" name="password" required>

                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-dark">Registar</button>
                            
                            <!--Para los usuarios que ya tienen cuenta, dando clic los manda al index,
                                que está en la carpeta principal-->  
                            <p class="small fw-bold mt-2 pt-1 mb-0">You have an account? 
                                
                                <a href="../index.php" class="link-danger">Login</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="../public/js/calculadora.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>