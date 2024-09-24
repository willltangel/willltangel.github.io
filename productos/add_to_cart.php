<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $item = [
        'name' => $data['name'],
        'quantity' => $data['quantity'],
        'price' => $data['price'],
        'total' => $data['quantity'] * $data['price']
    ];

    // Añadir el producto al carrito
    $_SESSION['cart'][] = $item;

    echo json_encode(['message' => 'Producto añadido al carrito.']);
}
?>