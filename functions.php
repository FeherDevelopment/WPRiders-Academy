<?php
if ( ! function_exists( 'theme_setup' ) ) {
   
    function theme_setup() {
     
       
        load_theme_textdomain( 'text_domain', get_template_directory() . '/languages' );
     
        add_theme_support( 'automatic-feed-links' );
     
        add_theme_support( 'post-thumbnails' );
     
        add_theme_support( 'custom-logo' );

        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'text_domain' ),
            'secondary' => __('Secondary Menu', 'text_domain' )
        ) );
     
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
} 
