<?php

function my_theme_enqueue_styles() {
    $parenthandle = 'understrap-styles'; // This is 'understrap-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
    wp_enqueue_script( 'script', 'https://kit.fontawesome.com/53f8f7e502.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );