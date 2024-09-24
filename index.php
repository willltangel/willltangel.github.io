<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sweet Moment</title>
    <link rel="stylesheet" type="text/css" href="css/stylebuscador.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    <link rel="stylesheet" type="text/css" href="css/scroll.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<style>
h2{
    font-family:cursive, Tahoma, Geneva, Verdana, sans-serif;
}
#ctn-bars-ubicacion{
    width: 100%;
    background: #643b1498;
    padding: 20px;
    margin: auto;
    padding: 10px;
    font-size: 18px;
    outline: 0;
}
html{
    scroll-behavior: smooth;
}
</style>

<body>

    <header>
        <nav>
            <div style="position: absolute; left: 5%; top: 5%; background-color: rgba(238, 240, 162, 0.205); border-radius: 30%; ">
                <a href="#inicio" class="smooth-scroll"><img src="img/logo2.png" height="50px"></a>
            </div>
            <div
                style="position: absolute; right: 2%; top: 5%; background-color: rgba(238, 240, 162, 0.205); border-radius: 30%; ">
                <a href="usuario.php"><img src="img/Usuario.png" height="50px"></a>
            </div>

            <div  style="position: absolute; right: 10.5%; top: 25%; height: 9px;">
                <a href="#ubicacion"class="smooth-scroll"><i class="fa-solid fa-location-dot"></i></a>
            </div>

            <div  style="position: absolute; right: 13%; top: 20%; height: 9px;" >
            <a href="#nosotros" ><button id="miBoton">Nosotros</button></a>
 </div>
           
        </nav>
        <div id="ctn-icon-search" style="position: absolute; right: 7%; top: 23%;">
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


    <section style="margin-top:0px;" id="inicio">
        <img src="img/Bienvenida.jpg" width="1350px" height="707px">
</section>
<section style="margin-top:150px;" >
    <center>
<div>
            <h1>Un sabor dulce para tu dia.</h1>
            <img src="img/logo3.png" width="350px" height="150px">
            <h2>Disfruta nuestras</h2><h2 style="color:rgb(233, 150, 72);"> delicias</h2>
        </div>
    </center>
    </section>

    <section  style="margin-top:500px;">
        
    <div style="width: 100px; display: inline;white-space: nowrap; align-items: center;">
                <h1>
                    <center>LA EFICIENCIA HECHA <b style="color:rgb(233, 150, 72);"> MASA:</b></center><br>
                </h1>
            </div>

            <div style=" width: 100px; display: inline;white-space: nowrap; align-items: center;">
                <center>
                    <h3>UNA EMPRESA QUE HA EVOLUCIONADO, GUIADA POR LA COVICCION DE BUSCASCAR SIEMPRE EL MEJOR PRODUCTO
                        PARA <p style="color: #05050500;">-----------------</p> LA SATISFACCCION DE SUS CLIENTES.
                        BUSCANDO MANTENER LOS ALTOS ESTANDARES DE CALIDAD.</h3>
                </center>
            </div>
        </div>    
    
    <div style="margin-top:70px">
            <center>
                <button class="button">
                    <h3 style="color: #050505;">Sugerencias de la casa</h3>
                </button>
            </center>
            <div class="image-container"><marquee behavior="" direction="">
                <img src="img/Bienvenida.png" alt="Imagen 1">
                <img src="img/img.webp" alt="Imagen 2">
                <img src="img/img.webp" alt="Imagen 3">
                <img src="img/img.webp" alt="Imagen 4">
                <img src="img/img.webp" alt="Imagen 4">
                <img src="img/img.webp" alt="Imagen 4">
                <img src="img/img.webp" alt="Imagen 4">
</marquee>
            </div>
    
    </section>

    <section style="margin-top: 600px;" id="productos">
        <div style="width: 100px; display: inline;white-space: nowrap; align-items: center;">
            <center>
                <h2 >Las distintas maneras <br> de
                    disfrutar de un <b style="color:rgb(233, 150, 72);">RICO MOMENTO</b></h2>
            </center>
        </div>
        <article style="width: 100px; display: flex;white-space: nowrap; align-items: center; margin-left: 100px;top: 10px;">
            <div style="width: 100px;margin: 40px;margin-left: 100px;">
                <a href="productos/panificados.php"><img src="img/panificado.jfif" width="100px" height="100px" style="border-radius: 60%;"></a>

            </div>
            <div>
                <h2>Panificados</h2>
                <p> para que puedas disfrutar  en cualquier<br> momento del dia</p>
            </div>
            
            <div style="width: 100px;margin: 40px;margin-left: 150px;">
                <h2 style="margin-left: 200px;">Café</h2>
                <p> un sabor dulce pero no empalagozo</p>
            </div>
            <div style="width: 100px;margin: 40px;margin-left: 150px;">
                <a href="productos/cafes.php"><img src="img/cafe.jpg" width="100px" height="100px" style="border-radius: 60%;"></a>

            </div>
        </article>
        <article style="width: 100px; display: flex;white-space: nowrap; align-items: center; margin-left: 550px;">
            <img src="img/logoa-removebg-preview.png" width="500px" height="110px">
        </article>
        <article style="width: 100px; display: flex;white-space: nowrap; align-items: center; margin-left: 100px;top: 10px;">
            <div style="width: 100px;margin: 40px;margin-left: 100px;">
                <a href="productos/batidos.php"><img src="img/batidos.jfif" width="100px" height="100px" style="border-radius: 60%;"></a>

            </div>
            <div>
                <h2>Batidos</h2>
                <p>
                    no solo todos lo colores si no todos lo sabores</p>
            </div>
            
            <div style="width: 100px;margin: 40px;margin-left: 190px;">
                <h2 style="margin-left: 35px;">Pastelerias</h2>
                <p> cosas ricas para tu dia</p>
            </div>
            <div style="width: 100px;margin: 40px;margin-left: 60px;">
                <a href="productos/pasteleria.php"><img src="img/postres.jpg" width="100px" height="100px" style="border-radius: 60%;"></a>

            </div>
        </article>
    </section>

    <section style="margin-top: 600px;" id="ubicacion">
        <center><h2>Estamos aquí</h2></center>

    <section style="margin-top: 50px;">
        <div id="ctn-bars-ubicacion">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.8989460048!2d-75.57369868554292!3d6.251868095491837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429aff7f4f075%3A0x9cf12f1c6abf8fe6!2sCl.%2019%20%2349-20%2C%20Medell%C3%ADn%2C%20Antioquia%2C%20Colombia!5e0!3m2!1ses!2sus!4v1624784400000!5m2!1ses!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
        </div>
    </section>
    <section style="margin-top: 600px;" id="nosotros">
        <footer class="footer" >
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

    </footer>
    </section>
</body>
<script src="js/menu.js"></script>
<script src="js/Jsbuscador.js"></script>
<script src="js/jsscroll.js"></script>

</html>