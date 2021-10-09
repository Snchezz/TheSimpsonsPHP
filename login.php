<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="icon" type="image/png" href="media/img/Logo.png" sizes="30x30">
        <script src="script.js"></script>
        <title>The Simpsons | Inicio Sesion</title> 
    </head>
    <body id="bodylogin">

    <?php $mi_pagina="login"; ?>
        <?php
            include 'header.php'
        ?>

        <br>
        <form id="login">
            <div class="form-group row">
              <div class="col-sm-">
                <input type="email" class="form-control" id="email" placeholder="Teléfono, usuario o correo eléctronicos">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <div class="col-sm-12">
                <input type="password" class="form-control" id="password" placeholder="Contraseña">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <div class="col-sm-12">
                <button id="btnlogin" type="submit" class="btn btn-primary">Iniciar Sesion</button>
              </div>
            </div>
            <br>
            <a href="recuperarpassword.php"><h1 id="NoPassword">¿Olvidaste tu contraseña?</h1></a>
        </form>
        <br>
        <div class="m-0 row justify-content-center">
            <div class="col-auto text-center">
                <a href="registro.php"><h1 id="Registrate">¿No tienes una cuenta? Resgístrate</h1></a>
            </div>
        </div>

        
        <?php
            include 'footer.php'
        ?>
        

    </body>
</html>