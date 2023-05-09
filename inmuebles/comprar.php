<?php

include("../dba/db.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Comprar | ADDE CAPITAL. S.A. </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/style-index.css" rel="stylesheet">
    <link href="../assets/css/style-inmuebles.css" rel="stylesheet">
    <link href="../assets/css/style-botones.css" rel="stylesheet">
    <link rel="icon" href="../assets/img/logo2.jpg" type="image/x-icon">
</head>

<body>

    <header class="menu" id="inicio">
        <div class="container">

            <h1 class="titulo-menu">
              <a href="../index.php" class="titulo-menu">INMOBILIARIA - ADDE CAPITAL. S.A.</a>
            </h1>


            <nav class="lista-menu">
            <ul class="menu-enlaces">
                    <li class="enlaces-menu"><a href="../index.php">Inicio</a></li>
                    <li class="enlaces-menu"><a href="alquilar.php">Alquilar</a></li>
                    <li class="enlaces-menu"><a href="comprar.php">Comprar</a></li>
                    <li class="enlaces-menu"><a href="../login/login.php">Login</a></li> 
                    <li class="enlaces-menu"><a href="../formularios/registrar.php">Registrarse</a></li> 
              
                  
                </ul>
            </nav>  

        </div>
    </header>

    <main class="desarrollo">
        <div class="container">

            <section class="buscador-pizarra">
                <div class="container">

              
                 
                    <div class="buscador-inmobiliaria">
               
                    <input type="text" class="buscador" id="buscador"   placeholder="Buscar inmuebles...">
                   
                    </div>

                </div>
            </section>


            <section class="zonas-ventas" id="ventas">
                <div class="container">

                    <div class="zonas">
                        <h3 class="titulo-ventas">Zonas en venta</h3>
                    </div>

                    <div class="deportiva" data-deportiva> </div>

                </div>
            </section>





            <section class="contactos" id="contactos ">
                <div class="container ">
                    <h2 class="titulo-contacto">Conocenos y Contactanos</h2>

                    <div class="informacion-contacto">

                        <nav class="lista-contacto">
                            <img src="../assets/img/logo2.jpg" class="img-contacto" alt="logo">

                            <ul class="lista-informacion">
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Quienes Somos</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Políticas de privacidad</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Programa de fidelidad</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Nuestras Tiendas</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Quiero ser Franquiciado</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Anuncie Aquí</a></li>
                            </ul>
                        </nav>

                        <div class="contacto">

                            <div class="titulos-contacto ">
                                <h3 class=" contacto-subtexto ">Hablanos</h3>
                            </div>

                            <form action="https://formsubmit.co/aldayanaavila02@gmail.com" method="POST" class="contacto-form" id="form" name="form">
                                <input class="contacto-input" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                                <input class="contacto-input" type="email" id="email" name="email" placeholder="E-mail" required>
                                <input class="contacto-input" type="text" id="asunto" name="asunto" placeholder="Asunto" required>
                                <textarea class="contacto-input" rows="5" type="text" cols="40" id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea> 
                                <button type="submit " id="enviar " class="contacto-boton ">Enviar mensaje</button>
                                <br>
                                <p class="alerta " id="alerta "></p>
                            </form>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <footer>
        
        <p>Hecho por
            <a href="https://">Aldayan A. Avila Dotel </a>
        </p>
        <a href=""></a>
        <a href=""></a>

    </footer>


   
    <script type="module" src="../assets/js/index-producto.js"></script>
    
</body>

</html>