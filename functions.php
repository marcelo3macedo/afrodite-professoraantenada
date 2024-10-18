<?php
function mytheme_customize_register($wp_customize)
{
    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer', 'mytheme'),
        'description' => __('Customize the footer settings', 'mytheme'),
        'priority' => 120,
    ));

    $wp_customize->add_setting('footer_copyright', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('footer_menu', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('category_control', array(
        'label' => __('Menu', 'mytheme'),
        'section' => 'footer_section',
        'settings' => 'footer_menu',
        'type' => 'select',
        'choices' => mytheme_get_nav_menus(),
    ));

    $wp_customize->add_control('footer_copyright_control', array(
        'label' => __('Copyright Message', 'mytheme'),
        'section' => 'footer_section',
        'settings' => 'footer_copyright',
        'type' => 'text',
    ));
}

function mytheme_get_nav_menus()
{
    $menus = wp_get_nav_menus();
    $choices = array();

    foreach ($menus as $menu) {
        $choices[$menu->term_id] = $menu->name;
    }

    return $choices;
}

add_action('customize_register', 'mytheme_customize_register');
