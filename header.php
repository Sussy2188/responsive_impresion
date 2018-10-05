<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>impresiones</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/impresion.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    
</head>
<body>      

    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
         <a class="navbar-brand" href="#">
            <img src=" <?php echo get_stylesheet_directory_uri() ?>/images/Logo-ImpresON.png" width="175" height="auto"class="img-responsive"/>
         </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Conocenos</a>
                </li>
                </ul>
        </div>
        <a class="nav-item" href="#">
            <img src=" <?php echo get_stylesheet_directory_uri() ?>/images/icono.png" width="25" height="auto"class="img-responsive"/>
        </a>
    </nav>
    
