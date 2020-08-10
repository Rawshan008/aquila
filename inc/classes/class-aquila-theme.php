<?php

/**
 * Bootstraps the Theme.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME
{
    use Singleton;

    protected function __construct()
    {

        // Load class.
        $this->setup_hooks();
        Assets::get_instance();
        Menus::get_instance();
        Sidebar::get_instance();
    }

    protected function setup_hooks()
    {
        // actions and filters hook
        add_action('after_setup_theme', [$this, 'theme_setup']);
    }

    public function theme_setup()
    {

        /**
         * Load theme text-domain
         */

        /**,
         * Suppert Title Tag
         */
        add_theme_support('title-tag');

        /**
         * Support Logo
         */
        add_theme_support('custom-logo', [
            'height'      => 60,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => ['site-title', 'site-description']
        ]);

        /**
         * Body Custom Background
         */
        add_theme_support('custom-background', [
            'default-color'          => '',
            'default-image'          => '',
            'default-repeat'         => 'no-repeat',
            'default-position-x'     => 'center',
            'default-position-y'     => 'center',
            'default-size'           => 'cover',
            'default-attachment'     => 'scroll',
        ]);

        /**
         * Support Feature Image
         */
        add_theme_support('post-thumbnails');

        /**
         * Support pertially image refrshment
         */
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * automitically feed links
         */
        add_theme_support('automatic-feed-links');

        /**
         * support html 5
         */
        add_theme_support(
            'html5',
            ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']
        );

        /**
         * add style for tinymce editor
         * default is calles editor-style.css
         */
        add_editor_style();

        /**
         * Gutenburg ar block ar style support kore jonno
         */
        add_theme_support('wp-block-style');

        /**
         * Genreally wordpress utenburg do not have full width and max-whdth
         * if we want then we have to add this theme support
         */
        add_theme_support('align-wide');

        /**
         * Content Width
         */
        global $contend_width;
        if (!isset($contend_width)) {
            $contend_width = 1240;
        }

        /**
         * Add Image size
         */
        add_image_size('blog-image', 290, 194, true);
    }
}