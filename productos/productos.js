let total = 0;

function openModal(name, type, price, details) {
    document.getElementById('cafe-name').innerText = name + ' (' + type + ')';
    document.getElementById('cafe-details').innerText = details + ' Precio: $' + price;
    document.getElementById('total-price').innerText = 'Precio: $' + price;
    document.getElementById('myModal').style.display = "block";
    total = parseFloat(price);
}

function closeModal() {
    document.getElementById('myModal').style.display = "none";
}

function updatePrice() {
    const quantity = document.getElementById('quantity').value;
    const price = total;
    const finalPrice = (price * quantity).toFixed(2);
    document.getElementById('total-price').innerText = 'Precio total: $' + finalPrice;
}

function addToCart() {
    const name = document.getElementById('cafe-name').innerText;
    const quantity = document.getElementById('quantity').value;
    const price = total;

    // Enviar los datos al servidor para agregar al carrito
    fetch('add_to_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ name, quantity, price })
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        closeModal();
    });
}