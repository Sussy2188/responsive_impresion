<?php

function impresion_styles() {
    
    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );

    wp_enqueue_style( 'bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" );

    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery');

    wp_enqueue_script( 'bootstrapjs', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js", array('jquery'), '4.1.3', true );
}
add_action('wp_enqueue_scripts', 'impresion_styles');

/** Navegacion menu **/


