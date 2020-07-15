<?php
/**
 * main function file
 *
 * @pakage Aquila
 */
if ( !function_exists( 'aquila_setup' ) ):
    function aquila_setup() {
        /**
         * For Wordpres Title
         */
        add_theme_support( 'title-tag' );
    }
endif;
add_action( 'after_setup_theme', 'aquila_setup' );

/**
 * enqueue scripts
 */
if ( !function_exists( 'aquila_assets' ) ):
    function aquila_assets() {
        wp_enqueue_style( 'main-style', get_stylesheet_uri(), [], time() );
    }
endif;
add_action( 'wp_enqueue_scripts', 'aquila_assets' );