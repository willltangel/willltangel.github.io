<?php
include 'conexion_be.php';

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
$contrasena = $_POST['contrasena'];

// Verificar si el correo ya está registrado
$stmt = $conexion->prepare("SELECT * FROM cliente WHERE correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo '
        <script>
            alert("Este correo ya está en uso");
            window.location = "../usuario.php";
        </script>
    ';
    exit();
}

// Verificar si el nombre de usuario ya está registrado
$stmt = $conexion->prepare("SELECT * FROM cliente WHERE nombre = ?");
$stmt->bind_param("s", $nombre);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo '
        <script>
            alert("Este usuario ya está en uso");
            window.location = "../usuario.php";
        </script>
    ';
    exit();
}

// Hash de la contraseña
$hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

// Consulta preparada para insertar datos
$stmt = $conexion->prepare("INSERT INTO cliente (nombre, correo, telefono, contrasena) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $correo, $telefono, $hashed_password);

if ($stmt->execute()) {
    echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../index.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Intente de nuevo, usuario no almacenado");
            window.location = "../usuario.php";
        </script>
    ';
    exit();
}

$stmt->close();
$conexion->close();
?>