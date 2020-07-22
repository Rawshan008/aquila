<?php
/**
 * Bootstraps the Theme.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
	use Singleton;

	protected function __construct() {

		// Load class.
		$this->setup_hooks();
		Assets::get_instance();
	}

	protected function setup_hooks() {
        // actions and filters hook
        add_action( 'after_setup_theme', [$this, 'theme_setup'] );
	}

	public function theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
        add_theme_support( 'customize-selective-refresh-widgets' );
        $bg_defaults = [
            'default-image'          => '',
            'default-preset'         => 'default',
            'default-size'           => 'cover',
            'default-repeat'         => 'no-repeat',
            'default-attachment'     => 'scroll',
        ];
        add_theme_support( 'custom-background', $bg_defaults );

        add_theme_support( 'custom-logo', [
            'height'      => 60,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => [ 'site-title', 'site-description' ]
         ]);
        $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
        add_theme_support( 'post-formats', $post_formats);

        add_theme_support( 'automatic-feed-links' );

    }
}
