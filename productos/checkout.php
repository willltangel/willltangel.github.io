<?php
session_start();
$total = 0;
// Redirigir si el carrito está vacío
if (empty($_SESSION['cart'])) {
    header('Location: cart.php'); 
    exit();
}

// Calcular el total
foreach ($_SESSION['cart'] as $item) {
    $total += $item['total'];
}

// Redirigir a la página de inicio de sesión si el correo no está en la sesión
if (!isset($_SESSION['cliente'])) {
    header('Location: usuario.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Pago</title>
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
        .total {
            font-size: 1.5em;
            margin: 20px 0;
            text-align: center;
        }
        .payment-methods {
            margin: 20px 0;
        }
        .payment-methods label {
            display: block;
            margin-bottom: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Gracias por tu compra</h1>
        <p class="total">Tu total es: $<?php echo number_format($total, 2); ?></p>
        <p>Selecciona tu método de pago:</p>

        <form action="process_payment.php" method="POST">
            <div class="payment-methods">
                <label>
                    <input type="radio" name="payment_method" value="credit_card" required>
                    Tarjeta de Crédito
                </label>
                <label>
                    <input type="radio" name="payment_method" value="mercado_pago" required>
                    Mercado Pago
                </label>
                <label>
                    <input type="radio" name="payment_method" value="paypal" required>
                    PayPal
                </label>
            </div>
            <button type="submit">Proceder al Pago</button>
        </form>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Galería de Café. Todos los derechos reservados.</p>
        <a href="index.php">Volver a la Galería</a>
    </footer>
</body>
</html>