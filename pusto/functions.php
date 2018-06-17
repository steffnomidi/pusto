<?php
add_theme_support( 'post-thumbnails' );

function mp_scripts() {
  wp_enqueue_style( 'bs-style','//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bs-script', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('popper','bs-script'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'mp_scripts' );
