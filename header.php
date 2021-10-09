<div class="d-flex justify-content-center">
    <a href="index.php"><img id="TituloTheSimpsons" src="media/img/TituloTheSimpsons.png" class="img-fluid" alt="TheSimpsons Titulo"></a>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div id="fuentenav" class="navbar-nav">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="index.php" <?php if ($mi_pagina=="index") echo " style='color:white'"; ?>>INICIO</a>
                    </li>
                    <li> 
                        <a class="nav-link" onclick="alert('Para tener mas informacíon de los personajes, posicionate encima!')" href="personajes.php" <?php if ($mi_pagina=="personajes") echo " style='color:white'"; ?>>PERSONAJES</a>
                    </li>
                    <li> 
                        <a class="nav-link" href="lugares.php" <?php if ($mi_pagina=="lugares") echo " style='color:white'"; ?>>LUGARES</a>
                    </li>
                    <li>
                        <a class="nav-link" href="momentos.php" <?php if ($mi_pagina=="momentos") echo " style='color:white'";; ?>>MOMENTOS</a>
                    </li>
                    <li>
                        <a class="nav-link" href="creditos.php" <?php if ($mi_pagina=="creditos") echo " style='color:white'";; ?>>CREDITOS</a>
                    </li>
                </ul>
            </div>
            <div id="fuentenav" class="navbar-nav ms-auto">      
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="login.php" <?php if ($mi_pagina=="login") echo " style='color:white'";; ?>>INICIAR SESION</a>
                    </li>
                    <li>
                        <a class="nav-link" href="contacto.php" <?php if ($mi_pagina=="contacto") echo " style='color:white'";; ?>>CONTACTO</a>
                    </li>
                </ul>          
            </div>
        </div>
    </div>
</nav>