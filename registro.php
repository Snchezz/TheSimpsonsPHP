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
        <title>The Simpsons | Registrarse</title> 
    </head>
    <body id="bodylogin">


    <?php $mi_pagina="registro"; ?>   
        <?php
          include 'header.php'
        ?>
        
        <br>
        <form id="login">
            <div class="form-group row">
              <div class="col-sm-">
                <input type="email" name="correo" class="form-control" id="email" placeholder="Correo eléctronico">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <div class="col-sm-12">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo">
              </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-12">
                  <input type="text" name="user" class="form-control" id="user" placeholder="Nombre usuario">
                </div>
            </div>
            <br>    
            <div class="form-group row">
              <div class="col-sm-12">
                <input type="password" name="pass" class="form-control" id="password" placeholder="Contraseña">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <div class="col-sm-12">
                <button name="enviar" id="btnlogin" type="submit" class="btn btn-primary">Crear Cuenta</button>
              </div>
            </div>
        </form>
        
        <br>
        <div class="m-0 row justify-content-center">
            <div class="col-auto text-center">
                <a href="login.php"><h1 id="Registrate">¿Ya tienes cuenta? Inicia Sesión</h1></a>
            </div>
        </div>
       
        <?php
            include 'footer.php'
        ?>
        

    </body>
</html>