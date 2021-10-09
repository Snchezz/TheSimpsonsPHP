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
        <title>The Simpsons | Contacto</title> 
    </head>
    <body id="bgcontac">
      
    
    <?php $mi_pagina="contacto"; ?>   
        <?php
            include 'header.php'
        ?>
        <br>
        <form id="login">
        <h1 id="recuperarpass">COMUNIQUESE CON NUESTRO EQUIPO</h1>
        <img class="firmasanchez" src="media/img/firma.png" alt="Firma Desarrollador">
        <br>
            <div class="form-group row">
                <div class="col-sm-">
                    <input type="text" placeholder="nombre" name="name" class="form-control" id="email" >
                    <br>
                    <input type="email" placeholder="email" name="email" class="form-control" id="email" >
                    <br>
                    <input type="text" placeholder="asunto" name="asunto" class="form-control" 
                    id="email" >
                    <br>
                    <textarea placeholder="mensaje" name="msg" class="form-control" id="email"></textarea> 
                    <br>
                    <input id="buttoncontac" type="submit">
                </div>
            </div>
        </form>

        <?php
            include 'correo.php'
        ?>
        
        <br>
        <?php
            include 'footer.php'
        ?>
    </body>
</html>