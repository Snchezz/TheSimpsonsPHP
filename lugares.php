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
        <title>The Simpsons | Lugares</title> 
    </head>
    <body>

        <?php $mi_pagina="lugares"; ?>


        <?php
            include 'header.php'
        ?>

        <div class="col">
            <div class="row">
                <h1 id="TituloLugares">LUGARES</h1>
            </div>
            <div class="row">
                <h1 id="SubTituloLugares">Aquí podrás ver los 9 edificios mas emblemáticos de Springfield. Pulsa sobre el edificio que quieras saber mas información</h1>
            </div>
        </div>

        <a href="#"><img class="gotopbtn" src="media/img/arribaimg1.png"></img>
        
        
        <div class="tz-gallery">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <a href="#CasaSimpsons" class="lightbox">
                        <img src="media/img/lugares/casasimpsons.png" class="img-fluid" alt="Casa Simpsons">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="#CasaFlanders" class="lightbox">
                        <img src="media/img/lugares/casaflander.png" class="img-fluid" alt="Casa Simpsons">
                    </a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="#CasaBurns" class="lightbox">
                        <img src="media/img/lugares/casaburns.png" class="img-fluid" alt="Casa Burns">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="#Badulaque" class="lightbox">
                        <img src="media/img/lugares/badulaque.png" class="img-fluid" alt="Badulaque">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="#TiendaComics" class="lightbox">
                        <img src="media/img/lugares/androiddungeon.png" class="img-fluid" alt="La Marmorra del Androide">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="#Ayuntamiento" class="lightbox">
                        <img src="media/img/lugares/ayuntamiento.png" class="img-fluid" alt="Ayuntamiento">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="#Colegio" class="lightbox">
                        <img src="media/img/lugares/colegio.png" class="img-fluid" alt="Colegio">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="#Bolera" class="lightbox">
                        <img src="media/img/lugares/bolera.png" class="img-fluid" alt="Bolera">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="#Iglesia" class="lightbox">
                        <img src="media/img/lugares/iglesia.png" class="img-fluid" alt="Iglesia">
                    </a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
              <div id="CasaSimpsons" class="col-4">
                <img class="imagenlugares" src="media/img/lugares/casasimpsons.png" alt="">
              </div>
              <div class="col-8">
                <h4 class="titulolugares">Casa de los Simpsons</h4>
                <p class="textolugares">742 de Evergreen Terrace es el domicilio ficticio donde vive la Familia Simpson, protagonista de la serie de televisión de dibujos animados Los Simpson. Está situado en la ciudad ficticia de Springfield, cuya localización es imposible de descubrir dado que durante la serie se hacen referencias contradictorias. Matt Groening se le ocurrió la idea de poner este nombre por la calle donde él vivió de niño o también por la universidad a la que acudió desde 1972 hasta 1977, la universidad Evergreen State de Olympia, Washington.</p>
              </div>
            </div>
            <br>
            <div class="row">
                <div id="CasaFlanders" class="col-8">
                  <h4 id="tituloalreves" class="titulolugares">Casa de los Flanders</h4>
                  <p class="textolugares">El 744 de Evergreen Terrace (en Hispanoamérica traducido como Avenida Siempreviva 744) es la casa ficticia donde vive la Familia Flanders, vecinos de la familia Simpson. En ella viven Ned Flanders, Todd Flanders, Rod Flanders y anteriormente Maude Flanders. En el episodio "Hurricane Neddy" la casa sufrió grandes daños luego de que un huracán pase sobre ella. Despues de pasar mucho tiempo desde la muerte de Maude Flanders , Ned Flanders se caso con Edna Krabappel, por lo que ella vivirá junto a él y con sus hijos en esta casa.</p>
                </div>
                <div id="idCasaFlanders" class="col-4">
                    <img class="imagenlugares" src="media/img/lugares/casaflander.png" alt="">
                  </div>
              </div>
              <br>
              <div class="row">
                <div id="CasaBurns" class="col-4">
                  <img class="imagenlugares" src="media/img/lugares/casaburns.png" alt="">
                </div>
                <div class="col-8">
                  <h4 class="titulolugares">Casa del Sr Burns</h4>
                  <p class="textolugares">La Mansión Burns es la gran mansión donde vive Charles Montgomery Burns. Tiene una cocina llena de cosas donde Smithers prepara las comidas del Sr. Burns excepto las comidas chatarras que no le gustan al Sr. Burns. La casa cuenta con tres niveles, que incluyen 200 habitaciones por cada uno, un ático, y un sótano en el primer piso. La habitación en la que duerme cuenta con un baño propio. Arriba es donde dormía su hijo Larry Burns. Tiene una hermosa biblioteca en la plata alta, la casa está decorada con muchos cuadros y antiguedades. Posee una habitación especial donde se encuentran monumentos de sus antepasados, junto con un monumento especial en el que estaba una copia del único billete de Un Trillón de Dólares. </p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-8">
                    <h4 id="tituloalreves" class="titulolugares">Badulaque</h4>
                    <p class="textolugares">El Kwik-E-Mart, El Badulaque en España es un minisupermercado ubicado en Springfield visto recurrentemente en los episodios. Su dueño y principal vendedor es Apu Nahasapeemapetilon, quién dedica casi la totalidad de su tiempo al minisuper generando problemas con su familia y en especial con su esposa Manjula. Cuando Apu no se puede encargar de atender la tienda deja a cargo a su hermano Sanjay. Algunos empleados del minisuper han sido Jeremy Freedman, quien ha trabajado en muchísimos establecimientos más, Homer Simpson, un mono que compró para ayudarlo, sus hijos (en el futuro), entre otros.
                    </p>
                </div>
                <div id="Badulaque" class="col-4">
                  <img class="imagenlugares" src="media/img/lugares/badulaque.png" alt="">
                </div>
              </div>
              <br>
              <div class="row">
                <div id="TiendaComics" class="col-4">
                    <img class="imagenlugares" src="media/img/lugares/androiddungeon.png" alt="">
                </div>
                <div class="col-8">
                    <h4 class="titulolugares">La marmorra del Android</h4>
                    <p class="textolugares">Es la tienda de cómics y tarjetas de beisbol donde trabaja Jeff Albertson. Se supone que es la única tienda de revistas cómicas en todo Springfield. En ella no sólo se exhiben revistas cómicas sino también piezas únicas como primeras ediciones de series famosas y merchandising de colección. En varias oportunidades se hicieron convenciones de cómics. En el episodio Worst Episode Ever Jeff Albertson sufre un episodio cardíaco y Bart y Milhouse se quedan a cargo de la tienda por un tiempo. En el capítulo I Am Furious Yellow, Stan Lee pasó varios días en la tienda ayudando (o molestando) a los clientes. Bob Terwilliger, Nelson Muntz, George Lucas y Matt Groening tienen prohibida la entrada.
                    </p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-8">
                    <h4 id="tituloalreves" class="titulolugares">Ayuntamiento</h4>
                    <p class="textolugares">El Ayutamiento de Springfield fue visto durante varios episodios de la serie, es utilizado para debatir sobre variados temas relacionados con ideas nuevas para solucionar problemas, como pasó en el episodio 'Marge vs. the Monorail' que discutieron sobre el uso que tendría el dinero del Sr. Burns.   
                    </p>
                </div>
                <div id="Ayuntamiento" class="col-4">
                  <img class="imagenlugares" src="media/img/lugares/ayuntamiento.png" alt="">
                </div>
              </div>
              <div class="row">
                <div id="Colegio" class="col-4">
                    <img class="imagenlugares" src="media/img/lugares/colegio.png" alt="">
                </div>
                <div class="col-8">
                    <h4 class="titulolugares">Colegio de primaria de Springfield</h4>
                    <p class="textolugares">Es un colegio que aparece en la serie. Es la escuela a la cual asisten Bart Simpson, Lisa Simpson, Milhouse Van Houten, Martin Prince, Nelson Muntz, Ralph Wiggum, entre otros. Sus cursos abarcan desde el Jardín de Niños hasta el 6º Grado. La mascota escolar es el puma. La escuela se caracteriza por la mala calidad de enseñanza de los profesores, los cuales, por lo general, asisten desanimados a clase y no se preocupan si los alumnos están aprendiendo. Por mucho lo que hacen si se comportan mal es enviarlos junto al Director Skinner para que éste les imparta algún castigo.  
                    </p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-8">
                    <h4 id="tituloalreves" class="titulolugares">Barney's Bowl-A-Rama</h4>
                    <p class="textolugares">La Bolera de Barney es una bolera de la ciudad de Springfield. Lo que hace estupendo este lugar no son sus aros de cebolla refritos 3 veces sino los fabulosos callejones de madera pulida que incluso un niño con el menor esfuerso puede hacer que la bola vaya a una velocidad lo suficiente para tirar un par de bolos. Aquí Homer Simpsons gano el campeonato, teniendo este como una gran azaña durante toda la serie"
                    </p>
                </div>
                <div id="Bolera" class="col-4">
                  <img class="imagenlugares" src="media/img/lugares/bolera.png" alt="">
                </div>
              </div>
              <div class="row">
                <div id="Iglesia" class="col-4">
                    <img class="imagenlugares" src="media/img/lugares/iglesia.png" alt="">
                </div>
                <div class="col-8">
                    <h4 class="titulolugares">La Primera Iglesia de Springfield</h4>
                    <p class="textolugares">Es el lugar donde la mayoría de los ciudadanos de Springfield concurren todos los domingos para escuchar la palabra de Dios por boca del Reverendo Lovejoy apareció originalmente en uno de los cortos de Los Simpson emitidos en el Show de Tracey Ullman llamado 'Los Paganos'. El Reverendo Lovejoy dirige los destinos espirituales de toda la comunidad que profesa la religión protestante. Los discursos del reverendo suelen ser largos y aburridos lo que ha ocasionado que en varias ocasiones Bart haya puesto su nota de color con alguna gamberrada como por ejemplo cambiar las santas partituras musicales de la pianista por unas no tan santas. Y así como Bart, muchas veces los extenuados ciudadanos de Springfield buscan una manera de interrumpir los extensos discursos de Alegría para poder irse a sus casas a disfrutar del resto del domingo.
                    </p>
                </div>
              </div>
        </div>

        <?php
            include 'footer.php'
        ?> 

    </body>
</html>