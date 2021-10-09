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
        <title>The Simpsons | ¿Ha olvidado su contraseña?</title> 
    </head>
    <body id="bodylogin">


    <?php $mi_pagina="recupass"; ?>   
        <?php
          include 'header.php'
        ?>
      
        <br>
        <form id="login">
            <div class="form-group row">
                <div class="col-sm-">
                    <h1 id="recuperarpass">Ahora es mas fácil que nunca</h1>
                    <h1 id="recuperarpass">recuperar tu cuenta</h1>
                </div>
            </div>
            <a href="login.php"><h1 id="NoPassword">Iniciar Sesión</h1></a>
            <br>
            <div class="form-group row">
              <div class="col-sm-12">
                <input type="password" class="form-control" id="password" placeholder="Correo o número utilizado">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <div class="col-sm-12">
                <button id="btnlogin" type="submit" class="btn btn-primary">Mandar enlace recuperación cuenta</button>
              </div>
            </div>
            <br>
        </form>
        <br>

        <?php
            include 'footer.php'
        ?> 

    </body>
</html>