<?php
include_once __DIR__ . '/../helpers/cache.php';
include_once __DIR__ . '/../helpers/categories.php';
include_once __DIR__ . '/../helpers/posts.php';

function get_categories_data()
{
    $categories = get_categories_with_children();

    return [
        'categories' => $categories
    ];
}
