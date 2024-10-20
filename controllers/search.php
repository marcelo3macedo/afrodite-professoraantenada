<?php
include_once __DIR__ . '/../helpers/cache.php';
include_once __DIR__ . '/../helpers/category.php';
include_once __DIR__ . '/../helpers/categories.php';
include_once __DIR__ . '/../helpers/posts.php';


function get_search_data($query, $pageId = 1)
{
    return get_or_set_transient(__FUNCTION__ . "_" . $query . "_" . $pageId, function () use ($query, $pageId) {
        $posts = get_posts_by_query($query, $pageId);

        return [
            'posts' => $posts,
            'query' => $query
        ];
    });
}
