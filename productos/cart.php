<?php
session_start();
$total = 0;

// Manejar la eliminación de un producto del carrito
if (isset($_POST['remove'])) {
    $removeIndex = $_POST['remove'];
    unset($_SESSION['cart'][$removeIndex]);
    $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindexar el carrito
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .remove-button {
            background-color: #d9534f; /* Color rojo */
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .remove-button:hover {
            background-color: #c9302c; /* Color rojo más oscuro al pasar el mouse */
        }
    </style>
</head>
<body>

    <h1>Carrito de Compras</h1>

    <?php if (empty($_SESSION['cart'])): ?>
        <p>El carrito está vacío.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
                <th>Acciones</th> <!-- Columna para acciones -->
            </tr>
            <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td>$<?php echo number_format($item['price'], 2); ?></td>
                    <td>$<?php echo number_format($item['total'], 2); ?></td>
                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="remove" value="<?php echo $index; ?>">
                            <button type="submit" class="remove-button">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php $total += $item['total']; ?>
            <?php endforeach; ?>
        </table>
        <h2>Total: $<?php echo number_format($total, 2); ?></h2>
        <button onclick="location.href='checkout.php'">Proceder al Pago</button>
    <?php endif; ?>

    <footer>
        <p>&copy; 2024 Galería de Café. Todos los derechos reservados.</p>
        <a href="index.php">Volver a la Galería</a>
    </footer>
</body>
</html>