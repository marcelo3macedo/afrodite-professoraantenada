<?php
include_once __DIR__ . '/../helpers/cache.php';

function get_footer_data()
{
    return get_or_set_transient(__FUNCTION__, function () {
        $menu = [];
        $footer_menu_id = get_theme_mod('footer_menu');
        $copyright = get_theme_mod('footer_copyright', 'Your default copyright text');

        if ($footer_menu_id) {
            $menu = wp_get_nav_menu_items($footer_menu_id);
        }

        return [
            'copyright' => $copyright,
            'menu' => $menu
        ];
    });
}
