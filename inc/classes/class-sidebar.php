<?php

/**
 * All Theme Sidebar
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Sidebar {
    use Singleton;

    protected function __construct() {
        // Load Hooks

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filters

        add_action('widgets_init', [$this, 'register_sidebar']);
    }

    /**
     * Register Sidebar
     */
    public function register_sidebar() {
        register_sidebar( array(
            'name'          => __( 'Main Sidebar', 'aquila' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'This is aquila Main Sidebar', 'aquila' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Sidebar', 'aquila' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'This is aquila Footer Sidebar', 'aquila' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );
    }

}