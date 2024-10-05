<?php
function get_posts_from_query($query) {
    $results = [];

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), CONST_SIZE_POST_IMAGE);

            $results[] = (object)array(
                'title'   => get_the_title(),
                'link'    => get_permalink(),
                'thumbnail' => $thumbnail_url
            );
        endwhile;
        wp_reset_postdata();
    endif;

    return $results;
}

function get_latest_posts($page = 1) {
    $cache_key = 'get_latest_posts_page_' . $page;
    $cached_result = get_transient($cache_key);

    if ($cached_result === true) {
        return $cached_result;
    }

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => CONST_NUMBER_LATEST_POSTS,
        'paged'          => $page,
    );

    $query = new WP_Query($args);
    $posts = get_posts_from_query($query);

    set_transient($cache_key, $posts, 24 * 60 * 60 );

    return $posts;
}

function get_posts_by_category($category_id, $page_id) {
    $cached_result = get_transient('get_posts_by_category_' . $category_id);

    if ($cached_result === true) {
        return $cached_result;
    }

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => CONST_NUMBER_LATEST_POSTS,
        'cat' => $category_id,
        'paged' => $page_id
    );

    $query = new WP_Query($args);
    $posts = get_posts_from_query($query);

    set_transient('get_posts_by_category_' . $category_id, $posts, 24 * 60 * 60 );

    return $posts;
}

function get_posts_by_query($s, $page_id) {
    $cached_result = get_transient('get_posts_by_search_' . $s);

    if ($cached_result === true) {
        return $cached_result;
    }

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => CONST_NUMBER_LATEST_POSTS,
        's'              => $s, 
        'paged' => $page_id
    );

    $query = new WP_Query($args);
    $posts = get_posts_from_query($query);

    set_transient('get_posts_by_search_' . $s, $posts, 24 * 60 * 60 );

    return $posts;
}

function get_posts_by_id($id) {
    $cached_result = get_transient('get_posts_by_id' . $id);

    if ($cached_result === true) {
        return $cached_result;
    }

    $post_data = get_post($id);

    set_transient('get_posts_by_id' . $id, $post_data, 24 * 60 * 60 );

    return $post_data;
}
?>