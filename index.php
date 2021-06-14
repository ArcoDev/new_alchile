<?php
    include_once "includes/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alchile Studio</title>
    <link rel="shortcut icon" href="build/icons/alchile.ico" type="image/x-icon">
    <link rel="stylesheet" href="build/css/app.css">
    <!-- FONT AWESOME CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>


<body id="body">
    <a id="up" href="#" title="Volver Arriba">
        <div class="up">
            <span>Volvamos</span>
            <i class="fas fa-arrow-circle-up"></i>
        </div>
    </a>
    <!-- Nav -->
    <nav id="box-nav" class="navbar">
        <div class="icon">
           <a href="index.php"><img src="build/icons/alchile.svg" alt="Alchile Studio"> </a>
        </div>
        <div id="menu" class="menu">
            <i id="bars" class="fas fa-bars"></i>
            <i id="close" class="fas fa-times"></i>
        </div>
    </nav>
    <!-- Header -->
    <header class="header">
        <video src="build/video/header2.mp4" autoplay muted loop playsinline></video>
        <div class="layer">
            <div class="title-header">
                <h1>We Make Good Shit</h1>
            </div>
        </div>
        <div id="overlay">
            <div class="layer-menu">
                <div class="txt-overlay">
                    <h2>We Make Good Shit</h2>
                </div>
                <div class="items">
                    <ul id="link" class="link">
                        <li>
                            <a href="#about">
                                01 <span>Nosotros</span>
                            </a>
                        </li>
                        <li>
                            <a href="#services">
                                02 <span>Servicios</span>
                            </a>
                        </li>
                        <li>
                            <a href="#portafolio">
                                03 <span>Portafolio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contact">
                                04 <span>Contacto</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="socials">
                    <ul>
                        <a href="">
                            <li>Facebook /</li>
                        </a>
                        <a href="">
                            <li>Instagram /</li>
                        </a>
                        <a href="">
                            <li>Whatsap /</li>
                        </a>
                        <a href="">
                            <li>Correo /</li>
                        </a>
                        <a href="">
                            <li>Telefono</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- About -->
    <section id="about" class="about">
        <img src="build/icons/alchile2.svg" alt="Alchile Studio">
        <p class="description">
            Está conformado por un equipo creativo con el compromiso de atender a nuestros clientes, brindándoles servicios picantes de gran impacto. Comprometidos en brindar servicios y soluciones mediante un conjunto de disciplinas, cada una analizada y desarrollada acorde a las necesidades de nuestros clientes.
        </p>
    </section>
    <!-- Services -->
    <section id="services" class="services">
        <div id="circle" class="circle"></div>
        <div class="title-services">
            <h2>Hacemos cosas picantes como <span id="service">Diseño</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptas vel ex laboriosam sequi,
                dolor exercitationem ipsum nisi, consectetur facere aspernatur, consequatur fugit. Laudantium in
                voluptates odio reiciendis vero temporibus?</p>
            <a href="#contact">Hablemos</a>
        </div>
        <div class="img-big">
            <img src="build/img/grande1.webp" alt="" class="big">
        </div>
        <ul class="img-thumb">
            <li>
                <img src="build/img/chica1.webp"
                    onclick="imgSlider('build/img/grande1.webp');changeCircle('#5f4691'); txtServices();"
                    alt="Nuestros Servicios">
            </li>
            <li>
                <img src="build/img/chica2.webp"
                    onclick="imgSlider('build/img/grande2.webp');changeCircle('#2fa2a8'); txtServices2();"
                    alt="Nuestros Servicios">
            </li>
            <li>
                <img src="build/img/chica3.webp"
                    onclick="imgSlider('build/img/grande3.webp');changeCircle('#ce297a'); txtServices3();"
                    alt="Nuestros Servicios">
            </li>
            <li>
                <img src="build/img/chica1.webp"
                    onclick="imgSlider('build/img/grande1.webp');changeCircle('#2fa2a8'); txtServices4();"
                    alt="Nuestros Servicios">
            </li>
            <li>
                <img src="build/img/chica2.webp"
                    onclick="imgSlider('build/img/grande2.webp');changeCircle('#ce297a'); txtServices5();"
                    alt="Nuestros Servicios">
            </li>
            <li>
                <img src="build/img/chica3.webp"
                    onclick="imgSlider('build/img/grande3.webp');changeCircle('#5f4691'); txtServices6();"
                    alt="Nuestros Servicios">
            </li>
            <li>
                <img src="build/img/chica3.webp"
                    onclick="imgSlider('build/img/grande3.webp');changeCircle('#2fa2a8'); txtServices7();"
                    alt="Nuestros Servicios">
            </li>
        </ul>
    </section>

    <!-- Portafolio  -->
    <section id="portafolio" class="portafolio">
        <div class="img-portafolio">
            <div class="title-protafolio">
                <h2>"Portafolio, algunos de nuestros trabajos con el factor picoso que nos distingue."</h2>
            </div>
        </div>
        <div class="filter">
            <ul>
                <li class="item">
                    <a data-grid="1">Diseño</a>
                    <span>|</span>
                </li>
                <li class="item">
                    <a data-grid="2">Fotografia</a>
                    <span>|</span>
                </li>
                <li class="item">
                    <a data-grid="3">Social Media</a>
                    <span>|</span>
                </li>
                <li class="item">
                    <a data-grid="4">Video Marketing</a>
                    <span>|</span>

                </li>
                <li class="item">
                    <a data-grid="5">MKT Digital</a>
                    <span>|</span>
                </li>
                <li class="item">
                    <a data-grid="6">Publicidad</a>
                    <span>|</span>
                </li>
                <li class="item">
                    <a data-grid="7">Toma Con Dron</a>
                </li>
            </ul>

        </div>
        <div class="container">
            <div id="grid-1" class="grid">
            <?php
                    $consulta = $con->query("SELECT * FROM imagenes WHERE id_categoria = '1' ");
                    while($imagenes = mysqli_fetch_array($consulta)) {
                        echo '<img src="build/portafolio/'.$imagenes['nombre'].'/'.$imagenes['url_foto'].'" alt="Portafolio de alchile studio">';
                    } 
            ?>
            </div>
            <div id="grid-2" class="grid">
            <?php
                    $consulta = $con->query("SELECT * FROM imagenes WHERE id_categoria = '2' ");
                    while($imagenes = mysqli_fetch_array($consulta)) {
                        echo '<img src="build/portafolio/'.$imagenes['nombre'].'/'.$imagenes['url_foto'].'" alt="Portafolio de alchile studio">';
                    } 
            ?>
            </div>
            <div id="grid-3" class="grid">
            <?php
                    $consulta = $con->query("SELECT * FROM imagenes WHERE id_categoria = '3' ");
                    while($imagenes = mysqli_fetch_array($consulta)) {
                        echo '<img src="build/portafolio/'.$imagenes['nombre'].'/'.$imagenes['url_foto'].'" alt="Portafolio de alchile studio">';
                    } 
            ?>
            </div>
            <div id="grid-4" class="grid">
            <?php
                    $consulta = $con->query("SELECT * FROM imagenes WHERE id_categoria = '4' ");
                    while($imagenes = mysqli_fetch_array($consulta)) {
                        echo '<img src="build/portafolio/'.$imagenes['nombre'].'/'.$imagenes['url_foto'].'" alt="Portafolio de alchile studio">';
                    } 
            ?>
            </div>
            <div id="grid-5" class="grid">
            <?php
                    $consulta = $con->query("SELECT * FROM imagenes WHERE id_categoria = '5' ");
                    while($imagenes = mysqli_fetch_array($consulta)) {
                        echo '<img src="build/portafolio/'.$imagenes['nombre'].'/'.$imagenes['url_foto'].'" alt="Portafolio de alchile studio">';
                    } 
            ?>
            </div>
            <div id="grid-6" class="grid">
            <?php
                    $consulta = $con->query("SELECT * FROM imagenes WHERE id_categoria = '6' ");
                    while($imagenes = mysqli_fetch_array($consulta)) {
                        echo '<img src="build/portafolio/'.$imagenes['nombre'].'/'.$imagenes['url_foto'].'" alt="Portafolio de alchile studio">';
                    } 
            ?>
            </div>
            <div id="grid-7" class="grid">
            <?php
                    $consulta = $con->query("SELECT * FROM imagenes WHERE id_categoria = '7' ");
                    while($imagenes = mysqli_fetch_array($consulta)) {
                        echo '<img src="build/portafolio/'.$imagenes['nombre'].'/'.$imagenes['url_foto'].'" alt="Portafolio de alchile studio">';
                    } 
            ?>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="grid paragraphs">
            <p class="text"></p>
        </div>
        <div class="grid info-contact">
            <div class="action">
                <a href="tel:8717130425">
                    <i class="fas fa-phone-volume"></i>
                    <p>871713 4025</p>
                </a>
            </div>
            <div class="action">
                <a href="mailto:hola:alchilestudio.com">
                    <i class="fas fa-envelope"></i>
                    <p>hola@alchilestudio.com</p>
                </a>
            </div>
            <div class="action">
                <a href="https://n9.cl/alchilestudio" target="_blank">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Torreón Coah. México</p>
                </a>
            </div>
        </div>
        <div class="grid socials">
            <ul>
                <a href="https://facebook.com/AlChileStudioMx/">
                    <li>Facebook /</li>
                </a>
                <a href="https://instagram.com/alchilestudio_mx/">
                    <li>Instagram /</li>
                </a>
                <a href="">
                    <li>Whatsapp</li>
                </a>
            </ul>
        </div>
        <div class="grid notice">
            <a href="aviso.pdf" target="_blank">Aviso de privacidad</a>
        </div>
    </section>
    
    <footer class="footer">
        <h2>Sitio Desarrollado por <span><a href="awsoftware.mx" target="_blank">AW Software</a></span></h2>
    </footer>
    <script src="build/js/app.js"></script>
</body>

</html>