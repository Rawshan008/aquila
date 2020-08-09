<?php

/**
 * Theme All assets Load
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Menus
{
    use Singleton;

    protected function __construct()
    {
        // Load Hooks

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // actions and filters

        add_action('init', [$this, 'aquila_menus']);
    }

    /**
     * Menu Register
     */
    public function aquila_menus()
    {
        register_nav_menus([
            'aquila-header-menu' => esc_html__('Header Menu', 'aquila'),
            'aquila-footer-menu' => esc_html__('Footer Menu', 'aquila')
        ]);
    }

    /**
     * Get Menu Id
     * return menu id.
     */
    public function get_menu_id($location)
    {
        $locations = get_nav_menu_locations();
        $menu_id = $locations[$location];

        return !empty($menu_id) ? $menu_id : '';
    }

    /**
     * Get Child menu Item
     * retuen child menu item
     */
    public function get_child_menu_item($menu_array, $parent_id)
    {
        $child_menu = [];

        if (!empty($menu_array) && is_array($menu_array)) {
            foreach ($menu_array as $menu) {
                if (intval($menu->menu_item_parent) === $parent_id) {
                    array_push($child_menu, $menu);
                }
            }
        }

        return $child_menu;
    }
}