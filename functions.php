<?php

/**
 * main function file
 *
 * @pakage Aquila
 */
define('AQUILA_VERSION', '1.0');
if (!function_exists('aquila_setup')) :
    function aquila_setup()
    {
        /**
         * For Wordpres Title
         */
        add_theme_support('title-tag');
    }
endif;
add_action('after_setup_theme', 'aquila_setup');

/**
 * enqueue scripts
 */
if (!function_exists('aquila_assets')) :
    function aquila_assets()
    {

        wp_enqueue_style('bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css");
        wp_enqueue_style('main-style', get_stylesheet_uri(), [], time());

        wp_enqueue_script('bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", ['jquery'], AQUILA_VERSION, true);
        wp_enqueue_script('popper', get_template_directory_uri() . "/assets/js/popper.min.js", ['jquery'], AQUILA_VERSION, true);
    }
endif;
add_action('wp_enqueue_scripts', 'aquila_assets');
