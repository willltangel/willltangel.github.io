
<?php
include 'conexion_be.php';
session_start();
    if(!isset($_SESSION['cliente'])){
        echo '
        <script>
            alert("Debe iniciar sesión");
            window.location = "../usuario.php";
        </script>
        ';
        session_destroy();     
        die();
   }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Moment</title>
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
</html>

<body>

    <header>
        <nav>
            <div id="#inicio"
                style="position: absolute; left: 5%; top: 5%; background-color: rgba(238, 240, 162, 0.205); border-radius: 30%; ">
                <a href="../index.php"><img src="../img/logo2.png" height="50px"></a>
            </div>
        </nav>
    </header>
</body>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>
    <div class="perfil">
        <img src="https://via.placeholder.com/150" alt="Foto de perfil" class="foto-perfil">
        <label id="nombre-usuario"><?php echo '<h1 align=center>' . $_SESSION["cliente"] . '</h1>'; ?></label>
        <p id="descripcion">algun dato extra del usuario.</p>
        <button id="btn-detalles">Mostrar Detalles</button>
        <div id="detalles" class="detalles oculto">
            <h2>Detalles Adicionales</h2>
            <p>Email: no se como poner el mail ya puesto amigo </p>
            <p>Ubicación: no la pedimos</p>
            <p>Intereses: corte como un carrito algo asi</p>
            <a href="logout.php" id="logout-button">Cerrar Sesión</a> <!-- Enlace para cerrar sesión -->
        </div>
    </div>
    <script src="../js/perfil.js"></script>
</body>
</html>

