<?php
add_action( 'wp_enqueue_scripts', function () {
    if( is_page( 'ukr' ) ){
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/uk-style.min.css');
   }
   else {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css');}

    wp_enqueue_script( 'app.min.js', get_template_directory_uri() . '/assets/js/app.min.js', array(),'null', true);
});
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
?>