<?php

include("../dba/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ADDE CAPITAL. S.A.</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style-login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" href="../assets/img/logo2.jpg">

</head>
<body>
<header class="menu inicio">
        <div class="container">

            <h1 class="titulo-menu">
                <img src="assets/img/rueda.png" class="goma"><a href="#" class="titulo-menu">ADDE CAPITAL. S.A.</a>
            </h1>


            <nav class="lista-menu">
            <ul class="menu-enlaces">
                    <li class="enlaces-menu"><a href="../index.php">Inicio</a></li>
                    <li class="enlaces-menu"><a href="#inicio">Alquilar</a></li>
                    <li class="enlaces-menu"><a href="#inicio">Comprar</a></li>
                
                    
                   
                </ul>
            </nav>

        </div>
    </header>

    <main class="desarrollo">
        <div class="container">
            
       

    <div class="wrapper fadeInDown">
        <div id="formContent">
          
            <div class="fadeIn first py-5">
                <img src="../assets/img/logo2.jpg" id="icon" alt="User Icon" />
            </div>
        
            <form class="wrapper fadeInDown" action="../conexion db/validar.php" method="POST">
                <input type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="Usuario" required autofocus>
                <input type="password" id="contraseña" class="fadeIn third" name="contraseña" placeholder="Contraseña" required>
                <input type="submit" class="fadeIn fourth" value="Iniciar">
            </form>

        </div>
    </div>


    <section class="contactos " id="contactos ">
                <div class="container ">
                    <h2 class="titulo-contacto ">Conocenos y Contactanos</h2>

                    <div class="informacion-contacto">

                        <nav class="lista-contacto">
                            <img src="./assets/img/ " class="img-contacto" alt="logo">

                            <ul class="lista-informacion">
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Quienes Somos</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Políticas de privacidad</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Programa de fidelidad</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Nuestras Tiendas</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Quiero ser Franquiciado</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Anuncie Aquí</a></li>
                            </ul>
                        </nav>

                        <div class="contacto ">

                            <div class="titulos-contacto ">
                                <h3 class=" contacto-subtexto ">Hablanos</h3>
                            </div>

                            <form action="https://formsubmit.co/aldayanaavila02@gmail.com" method="POST" class="contacto-form" id="form" name="form">
                                <input class="contacto-input" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                                <input class="contacto-input" type="email" id="email" name="email" placeholder="E-mail" required>
                                <input class="contacto-input" type="text" id="asunto" name="asunto" placeholder="Asunto" required>
                                <textarea class="contacto-input" rows="5" type="text" cols="40" id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea> <button type="submit " id="enviar " class="contacto-boton ">Enviar mensaje</button>
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
        <a href=""><img src="./assets/img/linkedin.png " alt="logo de linkedin"></a>
        <a href=""><img src="./assets/img/github.png " alt="logo de github"></a>

    </footer>

    <script src="../assets/js/login.js"></script>
</body>
</html>