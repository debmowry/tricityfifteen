<?php

// Load parent styles and Google fonts
function tricityfifteen_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));
    wp_enqueue_style( 'tricityfifteen_google_fonts', '//fonts.googleapis.com/css?family=Lato:400,700,300|Raleway:700,400,300|Muli:400,300' );
}
add_action( 'wp_enqueue_scripts', 'tricityfifteen_enqueue_styles' );

// Custom Function to include favicon
function favicon_link() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'. get_bloginfo('stylesheet_directory') .'/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );
