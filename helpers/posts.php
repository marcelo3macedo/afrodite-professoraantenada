<?php
include_once 'constants.php';

function get_posts_from_query($query)
{
    $results = [];

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), "small");

            $results[] = (object)array(
                'title'   => get_the_title(),
                'link'    => get_permalink(),
                'thumbnail' => $thumbnail_url,
                'excerpt'   => get_the_excerpt()
            );
        endwhile;
        wp_reset_postdata();
    endif;

    return $results;
}

function get_latest_posts($page = 1)
{
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => CONST_NUMBER_LATEST_POSTS,
        'paged'          => $page,
    );

    $query = new WP_Query($args);
    $posts = get_posts_from_query($query);

    return $posts;
}

function get_posts_by_category($category_id, $page_id)
{
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 12,
        'cat' => $category_id,
        'paged' => $page_id
    );

    $query = new WP_Query($args);
    return get_posts_from_query($query);
}

function get_posts_by_query($s, $page_id = 1)
{
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 12,
        's'              => $s,
        'paged' => $page_id
    );

    $query = new WP_Query($args);
    return get_posts_from_query($query);
}

function get_posts_by_id($id)
{
    return get_post($id);
}

function get_random_posts($page = 1)
{
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 6,
        'paged'          => $page,
        'orderby'        => 'rand',
    );

    $query = new WP_Query($args);
    return get_posts_from_query($query);
}
