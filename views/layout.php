<?php 
    if(!isset($inicio)){
        $inicio = false;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../build/css/app.css">
    <script src="./build/js/scrollreveal.js"></script>
    <title>Alimentos Page</title>
</head>
<body>
<header class="header <?php echo $inicio ? 'inicio' :  'nav' ?>">
        <div class="container contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/Logo.webp" alt="Logotipo de Bienes Raices">
                </a>

                <div class="derecha">
                    <nav class="navegacion">
                        <a href="/#nosotros">About</a>
                        <a href="/#productos">Products</a>
                        <a href="/#contacto">Contact</a>
                        <a href="/clientes">Crud</a>
                    </nav>
                </div>    
            </div> <!--.barra-->
            <div class="titulo">
                <?php if($mensaje ?? null):?>
                    <div class="alert">
                        <span class="mensaje-exito">Your Message Was Send</span>
                    </div>
                <?php endif;?>
                <?php if($inicio): ?>
                <?php echo
                "<span class='ml-0 titulos-span'>Discover your taste</span>" . 
                "<h1>Eat healthy and <br> Natural Food</h1>" . "<a href='#' class='boton-verde'>Learn More</a>"?>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <?php echo $contenido ?>  
</body>
<footer class="footer">
    <div class="content-footer container">
        <p>&copy; The Food | <?php echo date("Y")?> </p>
    </div>
</footer>
<script src="../build/js/bundle.min.js"></script>
</html>