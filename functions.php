<?php
function mytheme_customize_register($wp_customize)
{
    mytheme_main($wp_customize);
    mytheme_header($wp_customize);
    mytheme_footer($wp_customize);
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

function mytheme_get_categories()
{
    $categories = get_categories(array(
        'orderby' => 'name',
        'order'   => 'ASC',
        'hide_empty' => false,
        'parent' => 0
    ));

    $choices = array();

    foreach ($categories as $category) {
        $choices[$category->term_id] = $category->name;
    }

    return $choices;
}

function mytheme_main($wp_customize)
{
    $wp_customize->add_section('main_section', array(
        'title' => __('Main', 'mytheme'),
        'description' => __('Customize the main container', 'mytheme'),
        'priority' => 120,
    ));

    $wp_customize->add_setting('main_categories', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('main_control', array(
        'label' => __('Menu', 'mytheme'),
        'section' => 'main_section',
        'settings' => 'main_categories',
        'type' => 'select',
        'choices' => mytheme_get_categories(),
    ));
}

function mytheme_header($wp_customize)
{
    $wp_customize->add_section('header_section', array(
        'title' => __('Header', 'mytheme'),
        'description' => __('Customize the header container', 'mytheme'),
        'priority' => 120,
    ));

    $wp_customize->add_setting('header_categories', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_control', array(
        'label' => __('Header', 'mytheme'),
        'section' => 'header_section',
        'settings' => 'header_categories',
        'type' => 'select',
        'choices' => mytheme_get_categories(),
    ));
}


function mytheme_footer($wp_customize)
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

add_action('customize_register', 'mytheme_customize_register');
add_post_type_support( 'page', 'excerpt' );