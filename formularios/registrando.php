

<?php

include("../dba/db.php");

?>



<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <title>Registrando Usuario | ADDE CAPITAL. S.A.</title>

    <link rel="icon" href="../assets/img/social-icon.ico">
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
                    <li class="enlaces-menu"><a href="../inmuebles/alquilar.php">Alquilar</a></li>
                    <li class="enlaces-menu"><a href="../inmuebles/comprar.php">Comprar</a></li>
                    <li class="enlaces-menu"><a href="registrar.php">Registrarse</a></li>
                    <li class="enlaces-menu"><a href="../login/login.php">Login</a></li>

                </ul>
            </nav>

        </div>
    </header>

    <main class="container">
        <div class="row mx-0 mx-md-5 mb-5 ">

            <form class="border mt-5  p-5 rounded  shadow col-12" action="../assets/php/registrar/registrar-usuario-login.php" method="POST">

                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="../assets/img/" alt="">
                </div>

                <h2 class="mb-3 ">Registrando</h2>
                <p class="text-justify">Completar este formulario para tener mas información acerca de usted y poder contactarnos.</p>

            
                <div class="Form">
                    <label for="Imail" class="form-label"><b>Correo:</b></label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Email@gmail.com"  required>
                    <div class="invalid-feedback">
                        Ingrese un correo.
                    </div>
                    
                 </div>
                
                <div class="Form my-4">
                    <label for="contraseña" class="form-label"><b>Contraseña:</b></label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña"  required>
                    <div class="invalid-feedback">
                       Ingrese su contraseña
                    </div>
               </div>
                   
                <div class="Form my-4">
                    <label for="id_cargo" class="form-label"><b>id:</b></label>
                    <div class="individiduales mx-5  mb-5">
                        <select name="id_cargo"  class="form-control text-center"  placeholder="Elija un digito del 1 al 10" required>
                        <option value="">Elija su sexo</option>
                        <option value="2">Masculino</option>
                        <option value="2">Femenino</option>
                   </select>
                </div>
                    <button type="submit" name="submit" class="btn w-100 p-2 text-white" style="background-color: #39ace7 ;"><h5>Registrase y continuar</h5></button>
                </div>
                
            </form>


            
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


</body>

</html>