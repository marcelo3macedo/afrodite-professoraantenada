<?php
include_once __DIR__ . '/../helpers/cache.php';
include_once __DIR__ . '/../helpers/category.php';
include_once __DIR__ . '/../helpers/categories.php';
include_once __DIR__ . '/../helpers/posts.php';

function get_categories_data()
{
    $categories = get_categories_with_children();

    return [
        'categories' => $categories
    ];
}

function get_category_data($categoryId, $pageId = 1)
{
    $category = get_queried_object();
    $posts = get_posts_by_category($categoryId, $pageId);
    $subcategories = get_subcategories($categoryId);

    return [
        'posts' => $posts,
        'category' => $category,
        'subcategories' => $subcategories
    ];
}
