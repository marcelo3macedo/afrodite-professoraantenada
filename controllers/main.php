<?php
include_once __DIR__ . '/../helpers/cache.php';
include_once __DIR__ . '/../helpers/categories.php';
include_once __DIR__ . '/../helpers/posts.php';

function get_main_data($page)
{
    //return get_or_set_transient(__FUNCTION__ . "_" . $page, function () use ($page) {
    $main_menu_id = get_theme_mod('main_categories');
    $categories = get_all_categories_with_children($main_menu_id);
    $posts = get_latest_posts($page);

    return [
        'postTitle' => 'Novidades',
        'categoryTitle' => 'Categorias',
        'categories' => $categories,
        'posts' => $posts
    ];
    //});
}
