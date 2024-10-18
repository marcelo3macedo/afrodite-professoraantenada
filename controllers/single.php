<?php
include_once __DIR__ . '/../helpers/cache.php';
include_once __DIR__ . '/../helpers/category.php';
include_once __DIR__ . '/../helpers/categories.php';
include_once __DIR__ . '/../helpers/posts.php';

function get_single_data($postId)
{
    return get_or_set_transient(__FUNCTION__ . "_" . $postId, function () use ($postId) {
        $post = get_posts_by_id($postId);
        $categories = get_main_complement_category($postId);
        $related = get_random_posts();

        return [
            'categories' => $categories,
            'post' => $post,
            'related' => $related
        ];
    });
}
