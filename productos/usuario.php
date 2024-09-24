<?php
session_start(); // Iniciar la sesión 2

// Verificar si hay una sesión iniciada
if (isset($_SESSION['cliente'])) {
     echo '
    <script>
        window.location = "php/bienvenida.php";
    </script>
';
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Moment</title>
    <link rel="stylesheet" type="text/css" href="css/styleusuario.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<style>
</style>
<body>
    <header>
        <div style="position: absolute; left: 5%; top: 5%; background-color: rgba(238, 240, 162, 0.205); border-radius: 30%;">
            <a href="index.php"><img src="img/logo2.png" height="50px" alt="Logo"></a>
        </div>
    </header>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!-- Formulario de Login y registro -->
            <div class="contenedor__login-register">
                <!-- Login -->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <label for="correo_login">Correo:</label>
                    <input type="text" id="correo_login" name="correo" placeholder="correo" required>
                    
                    <label for="contrasena_login">Contraseña:</label>
                    <input type="password" id="contrasena_login" name="contrasena" placeholder="contrasena" required>
                    
                    <button type="submit">Entrar</button>
                </form>

                <!-- Register -->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>
                    
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                    
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" placeholder="Correo Electrónico" required>
                    
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
                    
                    <button type="submit">Regístrarse</button>
                </form>
            </div>
        </div>
    </main>

    <script src="js/menu.js"></script>
    <script src="js/jsusuario.js"></script>
</body>
</html>


