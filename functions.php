<?php

/**
 * main function file
 *
 * @pakage Aquila
 */

if(!defined('AQUILA_DIR_PATH')){
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

if(!defined('AQUILA_DIR_URI')){
    define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
define('AQUILA_VERSION', '1.0');

require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';
require_once AQUILA_DIR_PATH . '/inc/helpers/template-tags.php';

/**
 * Theme instance
 */
function aquila_get_theme_instance() {
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}
aquila_get_theme_instance();


