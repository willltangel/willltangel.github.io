
<?php
session_start();
include '../php/conexion_be.php'; // Incluir el archivo de conexión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paymentMethod = $_POST['payment_method'];
    $total = 0;

    // Calcular el total
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['total'];
    }

    // Verificar que el correo existe en la tabla cliente
    $check_query = "SELECT * FROM cliente WHERE correo = 'correo'";
    $result = mysqli_query($conexion, $check_query);

    if (mysqli_num_rows($result) == 0) {
        echo "El correo no está registrado. Por favor, verifica tu cuenta.";
        exit();
    }

    // Insertar el pedido en la base de datos
    $query = "INSERT INTO pedido (Estado, Cantidad, Fecha, correo) VALUES ('Procesado', 1, NOW(), '$correo')";
    if (mysqli_query($conexion, $query)) {
        // Obtener el ID del pedido insertado
        $id_pedido = mysqli_insert_id($conexion);

        // Insertar cada producto del carrito en la tabla de productos
        foreach ($_SESSION['cart'] as $item) {
            $nombre = mysqli_real_escape_string($conexion, $item['name']);
            $cantidad = $item['quantity'];
            $precio = $item['price'];

            // Aquí puedes insertar en la tabla producto si es necesario
            $query_producto = "INSERT INTO producto (nombre, stock, precio, ID_pedido) VALUES ('$nombre', '$cantidad', '$precio', $id_pedido)";
            mysqli_query($conexion, $query_producto);
        }

        // Vaciar el carrito después del pago
        $_SESSION['cart'] = [];

        // Mostrar mensaje de confirmación
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pago Procesado</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 20px;
                }
                h1 {
                    text-align: center;
                    color: #333;
                }
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                    background: white;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
                .footer {
                    text-align: center;
                    margin-top: 20px;
                }
            </style>
        </head>
        <body>

            <div class="container">
                <h1>Pago Procesado</h1>
                <p>Gracias por tu compra. Tu pago ha sido procesado con éxito utilizando el método: <strong><?php echo ucfirst($paymentMethod); ?></strong>.</p>
                <p>Tu total es: $<?php echo number_format($total, 2); ?></p>
            </div>

            <footer class="footer">
                <p>&copy; 2024 Galería de Café. Todos los derechos reservados.</p>
                <a href="index.php">Volver a la Galería</a>
            </footer>
        </body>
        </html>
        <?php
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conexion);
    }
} else {
    header('Location: index.php'); // Redirigir si no es una solicitud POST
    exit();
}
?>