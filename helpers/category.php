<?php
function get_category_id($queried) {
    if ($queried instanceof WP_Term && is_category()) {
        return $queried->cat_ID;
    }
}

function get_categories_by_children($parent_category_id) {
    $cached_result = get_transient('get_categories_by_children_' . $parent_category_id);

    if ($cached_result === true) {
        return $cached_result;
    }

    $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC',
        'parent' => $parent_category_id,
        'hide_empty' => false
    ));

    set_transient('get_categories_by_children_' . $parent_category_id, $categories, 24 * 60 * 60 );

    return $categories;
}

function get_categories_by_post_id($post_id) {
    $cached_result = get_transient('get_categories_by_post_id_' . $post_id);

    if ($cached_result === true) {
        return $cached_result;
    }

    $posts = get_the_category($post_id);

    set_transient('get_categories_by_post_id_' . $post_id, $posts, 24 * 60 * 60 );

    return $posts;
}

function get_list_categories_by_childen($parent_category_id) {
    $results = [];
    $categories =  get_categories_by_children($parent_category_id);

    foreach ($categories as $category) {
        $results[] = (object)[
            'title' => $category->name,
            'url' => '/category/' . $category->slug
        ];
    }
    
    return $results;
}

function get_list_categories_by_childen_with_initial($parent_category_id, $initial_name) {
    $results = [];

    $results[] = (object)[
        'title' => $initial_name,
        'url' => '/'
    ];
    
    $categories =  get_categories_by_children($parent_category_id);

    foreach ($categories as $category) {
        $results[] = (object)[
            'title' => $category->name,
            'url' => '/category/' . $category->slug
        ];
    }
    
    return $results;
}

function check_if_category_is_main($category) {
    if ($category instanceof WP_Term && is_category()) {
        return $category->parent === CONST_MAIN_CATEGORY;
    }
}

function get_main_complement_category($post_id) {
    $results = [];
    $post_categories = get_categories_by_post_id($post_id);

    $main_categories = array_values(array_filter($post_categories, function ($category) {
        return $category->category_parent == CONST_MAIN_CATEGORY;
    }));

    $complement_categories = array_values(array_filter($post_categories, function ($category) {
        return $category->category_parent != CONST_MAIN_CATEGORY;
    }));

    if (isset($main_categories[0])) {
        $results[] = $main_categories[0];
    }

    if (isset($complement_categories[0])) {
        $results[] = $complement_categories[0];
    }

    return $results;
}
?>