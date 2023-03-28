

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
                    <li class="enlaces-menu"><a href="#inicio">Alquilar</a></li>
                    <li class="enlaces-menu"><a href="#inicio">Comprar</a></li>
                    <li class="enlaces-menu"><a href="#inicio">Contactos</a></li>
                    <li class="enlaces-menu"><a href="#inicio">Login</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <main class="container">
        <div class="row mx-0 mx-md-5 mb-5 ">

            <form class="border mt-5  p-5 rounded  shadow col-12" action="Formulario.php" method="post">

                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="../assets/img/horizontal/oscuro/small.png" alt="">
                </div>

                <h2 class="mb-3 ">Registrando</h2>
                <p class="text-justify">Completar este formulario para tener mas información acerca de usted y poder contactarnos.</p>

                <div class="Form my-4">
                    <label for="First_name" class="form-label"><b>Nombre:</b></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese el nombre.
                    </div>
                </div>

                <div class="Form  my-4">
                    <label for="Last_name" class="form-label"><b>Apellido:</b></label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese el Apellido.
                    </div>
                </div>

                <div class="Form  my-4">
                    <label for="cedula" class="form-label"><b>Cédula:</b></label>
                    <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cedula" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese la Cédula.
                    </div>
                </div>

        
                <div class="Form  my-4">
                    <label for="Cellphone" class="form-label"><b>Teléfono:</b></label>
                    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="809-000-000" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese un Teléfono.
                    </div>
                </div>

                <div class="Form  my-4">
                    <label for="Adress" class="form-label"><b>Dirección:</b></label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese una Dirección.
                    </div>
                </div>

                <div class="Form   my-4">
                    <label for="Location" class="form-label"><b>¿En qué zona del país reside?</b></label>
                    <input type="text" class="form-control" id="donde_vives" name="donde_vives" placeholder="R.D santo domingo" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese una Residencia.
                    </div>
                </div>

                <div class="Form">
                    <label for="Imail" class="form-label"><b>Correo:</b></label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Email@gmail.com" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese un correo.
                    </div>
                 </div>
                
                <div class="Form my-4">
                    <label for="contraseña" class="form-label"><b>Contraseña:</b></label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña" value="" required>
                    <div class="invalid-feedback">
                       Ingrese su contraseña
                    </div>
                    <hr class="my-4">
                    <button type="submit" name="submit" class="btn w-100 p-2 text-white" style="background-color: #39ace7 ;"><h5>Enviar y continuar</h5></button>
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