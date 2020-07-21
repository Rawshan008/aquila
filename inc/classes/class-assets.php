<?php
/**
 * Theme All assets Load
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct() {
        // Load Hooks

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filters

        add_action('wp_enqueue_scripts', [$this, 'aquila_assets']);
    }

    public function aquila_assets() {
        wp_enqueue_style('bootstrap', AQUILA_DIR_URI . "/assets/css/bootstrap.min.css");
        wp_enqueue_style('main-style', get_stylesheet_uri(), [], time());

        wp_enqueue_script('bootstrap', AQUILA_DIR_URI . "/assets/js/bootstrap.min.js", ['jquery'], AQUILA_VERSION, true);
        wp_enqueue_script('popper', AQUILA_DIR_URI . "/assets/js/popper.min.js", ['jquery'], AQUILA_VERSION, true);
    }
}