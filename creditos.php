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
        <title>The Simpsons | Creditos</title> 
    </head>
    <body>

        <?php $mi_pagina="creditos"; ?>
        
        <?php
            include 'header.php'
        ?>
        
       
        <div class="col">
            <div class="row">
                <h1 id="TituloLugares">REDES SOCIALES</h1>
            </div>
            <div class="row">
                <ul id="lista">
                    <li>
                        <a href="https://www.facebook.com/Disney/" target="_blank"><img class="rrssdisney" src="media/img/creditos/facebookcredits.png"></a>
                    </li>
                    <li>
                        <span class="separador">| </span><a href="https://twitter.com/disneyspain" target="_blank"><img class="rrssdisney" src="media/img/creditos/twittercredits.png"></a>
                    </li>
                    <li>
                        <span class="separador">| </span><a href="https://www.instagram.com/disneyspain" target="_blank"><img class="rrssdisney" src="media/img/creditos/instagramcredits.png"></a>
                    </li>
                    <li>
                        <span class="separador">| </span><a href="https://www.youtube.com/user/marveles" target="_blank"><img class="rrssdisney" src="media/img/creditos/marvel.png"></a>
                    </li>
                    <li>
                        <span class="separador">| </span><a href="https://www.youtube.com/channel/UCnochs1lsm15PCcmlil85Tg" target="_blank"><img class="rrssdisney" src="media/img/creditos/starwar.png"></a>
                    </li>
                </ul>
            </div>
        </div>  
        <br>
        <div class="col">
            <div class="row">
                <h1 id="TituloLugares">CRÉDITOS</h1>
                <p id="textcreditos">Todos los creditos y derechos a Matt Groening,</p>
                <p id="textcreditos">creador de la serie y al actual dueño de esta, Disney</p>
            </div>
        </div>
        <br>
        <div id="mattcenter" class="col">
            <div class="row">
                <a id="mattcenter" href="https://es.wikipedia.org/wiki/Matt_Groening">
                    <img src="media/img/mattgroening.png" alt="Matt Groening">
                </a>
                <p id="creditostext">Puedes ver todos los episodios a la carta con</p>
                <a href="https://www.disneyplus.com/es-es/" target="_blank"><img class="rounded mx-auto d-block"   id="disney" src="media/img/disney+.svg"></a>
            </div>
        </div>
        <br>
        
        <?php
            include 'footer.php'
        ?>

    </body>
</html>