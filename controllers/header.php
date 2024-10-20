<?php
include_once __DIR__ . '/../helpers/categories.php';
include_once __DIR__ . '/../helpers/styles.php';
include_once __DIR__ . '/../helpers/seo.php';

function get_header_data()
{
    $stylesUrl = get_standard_url();
    $seo = get_seo_data();
    $amp = [
        'style' => get_amp_content()
    ];
    $logoUrl = get_template_directory_uri() . '/assets/images/full_logo.png';
    $headerCategoriesId = get_theme_mod('header_categories');
    $headerCategories = get_all_categories_with_children($headerCategoriesId);

    return [
        'stylesUrl' => $stylesUrl,
        'seo' => $seo,
        'amp' => $amp,
        'logoUrl' => $logoUrl,
        'categories' => $headerCategories
    ];
}
