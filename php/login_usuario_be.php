<?php
session_start();
include 'conexion_be.php';

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Verificar si se ha enviado una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $contrasena = $_POST['contrasena'];

    // Consulta preparada para evitar inyección SQL
    $stmt = $conexion->prepare("SELECT contrasena FROM cliente WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();
    
    // Verificar si el correo existe
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verificar la contraseña
        if (password_verify($contrasena, $hashed_password)) {
            $_SESSION['cliente'] = $correo;
            header("Location: bienvenida.php");
            exit;
        } else {
            echo '
            <script>
                alert("Contraseña incorrecta");
                window.location = "../usuario.php";
            </script>
            ';
            exit;
        }
    } else {
        echo '
        <script>
            alert("Correo no encontrado");
            window.location = "../usuario.php";
        </script>
        ';
        exit;
    }
    $stmt->close();
}
$conexion->close();
?>