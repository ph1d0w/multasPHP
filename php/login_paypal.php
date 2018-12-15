<?php
session_start();

echo $_SESSION['id_multa'];
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../imagenes/paypal.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <title>Paypal: Iniciar sesión</title>

    <!-- Custom styles for this template -->
    <link href="../css/login_paypal.css" rel="stylesheet">
    
  </head>

  <body class="text-center">
    <div class="container">
        <form class="form-signin" ENCTYPE="multipart/form-data" action="procesar_dinerito.php">

            <img class="mb-4" src="../imagenes/paypal.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Loguear</h1>

            <label for="email_paypal" class="sr-only">Email</label>
            <input type="text" id="email_paypal" class="form-control" placeholder="Email" required autofocus>
            <!-- Vuelvo a poner este campo como text para que bootstrap no intente ver si es email o no-->

            <label for="contrasena_paypal" class="sr-only">Contraseña</label>
            <input type="password" id="contrasena_paypal" class="form-control" placeholder="Contraseña" required>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Log-in</button>
            
          </form>
    </div>
   
  </body>
</html>
