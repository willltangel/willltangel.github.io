<?php
session_start(); // Iniciar la sesión
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = []; // Inicializar el carrito si no existe
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sweet Moment</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/stylebuscador.css">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="productos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<style>

</style>

<body>

    <header>
        <nav>
            <div id="#inicio"
                style="position: absolute; left: 5%; top: 5%; background-color: rgba(238, 240, 162, 0.205); border-radius: 30%; ">
                <a href="../index.php#inicio"><img src="../img/logo2.png" height="50px"></a>
            </div>
            <div
                style="position: absolute; right: 2%; top: 5%; background-color: rgba(238, 240, 162, 0.205); border-radius: 30%; ">
                <a href="../usuario.php"><img src="../img/Usuario.png" height="50px"></a>
            </div>

            <div id="#ubicacion" style="position: absolute; right: 10%; top: 30%; height: 10px;">
                <a href="../index.php#ubicacion"><i class="fa-solid fa-location-dot"></i></a>
            </div>
            <div  style="position: absolute; right: 13%; top: 20%; height: 9px;" >
                <a href="../index.php#nosotros" ><button id="miBoton">Nosotros</button></a>
            </div>

        </nav>
        <div id="ctn-icon-search" style="position: absolute; right: 7%; top: 30%;">
            <i class="fas fa-search" id="icon-search"></i>
        </div>
    </header>
    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>

    <ul id="box-search">
        <li><a href="#"><i class="fas fa-search"></i>Cafes</a></li>
        <li><a href="#"><i class="fas fa-search"></i>Tés</a></li>
        <li><a href="#"><i class="fas fa-search"></i>Bebidas</a></li>
        <li><a href="#"><i class="fas fa-search"></i>bakery</a></li>
        <li><a href="#"><i class="fas fa-search"></i>Sandwiches o Preparados</a></li>
        <li><a href="#"><i class="fas fa-search"></i>Postres</a></li>
    </ul>

    <div id="cover-ctn-search"></div>



<main>

    <h1 style="margin-top: 100px;">Galería de Café</h1>


    <section class="gallery" style="margin-top: 50px;">
        <div>
            <img src="../img/fuwa-fuwa.jfif" alt="Café 1" class="cafe-img"
                onclick="openModal('Café 1', 'Espresso', '3.00', 'El espresso es un café fuerte y concentrado, preparado a alta presión.')">
            <img src="../img/pastelkitkas.jfif" alt="Café 2" class="cafe-img"
                onclick="openModal('Café 2', 'Cappuccino', '4.00', 'El cappuccino es una mezcla de espresso, leche vaporizada y espuma de leche.')">
            <img src="../img/pastel3leches.jfif" alt="Café 3" class="cafe-img"
                onclick="openModal('Café 3', 'Latte', '4.50', 'El latte es un café con leche, suave y cremoso, ideal para los amantes de la leche.')">
        </div>
        <br>
        <div>
            <img src="../img/pastelsacher.jfif" alt="Café 4" class="cafe-img"
                onclick="openModal('Café 4', 'Americano', '2.50', 'El americano es un espresso diluido con agua caliente, con un sabor más suave.')">
            <img src="../img/pavovla.jfif" alt="Café 5" class="cafe-img"
                onclick="openModal('Café 5', 'Mocha', '4.75', 'El mocha es un latte con chocolate, perfecto para los amantes del dulce.')">
            <img src="../img/tartadesantiago.jfif" alt="Café 6" class="cafe-img"
                onclick="openModal('Café 6', 'Macchiato', '3.50', 'El macchiato es un espresso con una pequeña cantidad de leche.')">
        </div>
        <div>
            <img src="../img/tartatatin.jfif" alt="Café 7" class="cafe-img"
                onclick="openModal('Café 7', 'Flat White', '4.00', 'El flat white es un café con leche, con un equilibrio perfecto entre café y leche.')">
            <img src="../img/tortarogel.jfif" alt="Café 8" class="cafe-img"
                onclick="openModal('Café 8', 'Irish Coffee', '5.00', 'El Irish coffee es un café con whisky y crema, ideal para una noche especial.')">
            <img src="../img/chessecackefresa.jfif" alt="Café 9" class="cafe-img"
                onclick="openModal('Café 9', 'Affogato', '4.25', 'El affogato es una bola de helado bañada con espresso caliente.')">
        </div>
        <div>
            <img src="../img/baklava.jfif" alt="Café 7" class="cafe-img"
                onclick="openModal('Café 7', 'Flat White', '4.00', 'El flat white es un café con leche, con un equilibrio perfecto entre café y leche.')">
            <img src="../img/chocolate.jfif" alt="Café 8" class="cafe-img"
                onclick="openModal('Café 8', 'Irish Coffee', '5.00', 'El Irish coffee es un café con whisky y crema, ideal para una noche especial.')">
           
        <div>
         

    </section>


    <div id="myModal" class="modal">
        <div class="modal-content">
            <table>
                <tD id="tableimg">
                    <img src="../img/pastelpng.png" alt="" style="width: 170px; height:200px">
                </td>
                <td id="tablespan">
                    <span class="close" onclick="closeModal()">&times;</span>
                                <h2 id="cafe-name"></h2>
                                <p id="cafe-details"></p>
                                <label for="quantity">Cantidad:</label>
                                <input type="number" id="quantity" value="1" min="1" onchange="updatePrice()" style="border-radius: 5px; background-color: white;">
                                <p id="total-price"></p>
                                <button onclick="addToCart()" style="border-radius: 5px;">Añadir al carrito</button><br>
                                
                           
                </td>
                
            </table>
             </div>
    </div>

</main>
    <section style="margin-top: 1000px;">
        <footer class="footer " >
            <div  class="container">
                <center>
                    <div class="footer-row">
                        <div class="footer-links">
                          <h4>Pagina</h4>
                            <ul>
                               <li><a href="">Pagina principal</a></li>
                              <li><a href="">Productos</a></li>
                               <li><a href="">Carrito</a></li>
                              <li><a href="">Ubicacion</a></li>
                              <li><a href="">Iniciar Sesion-Registrarse</a></li>
                              <li><a href="cart.php">Ver Carrito</a></li>
                         </ul>

                         </div>
                     <div class="footer-links">
                         <h4>contactenos</h4>
                            <ul>
                                <li><a href=""><i class="fa-brands fa-facebook"></i>    SweetMoment_oficial</a></li>
                                <li><a href=""><i class="fa-brands fa-square-whatsapp">   3512832418</i></a></li>
                                <li><a href=""><i class="fa-brands fa-square-instagram"></i>     @SweetMomentArg</a></li>
                                <li><a href=""><i class="fa-brands fa-x-twitter"></i>    @SweetMoment_Arg</a></li>
                                <li><a href=""><i class="fa-brands fa-linkedin"></i>    SweetMomentCorp</a></li>
                            </ul>

                        </div>
                    </div>
                
            </center>
            </div>
            <p style="color:rgb(122, 121, 121);">&copy; 2024 Sweet Moment. Todos los derechos reservados.</p>
    </footer>
    </section >
</body>
<script src="../js/menu.js"></script>
<script src="../js/Jsbuscador.js"></script>
<script src="productos.js"></script>

</html>