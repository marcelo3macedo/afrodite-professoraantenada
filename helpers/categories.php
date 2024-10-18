<?php
function get_all_categories_with_children($category)
{
    $categories = get_categories(array(
        'orderby' => 'name',
        'order'   => 'ASC',
        'hide_empty' => false,
        'parent' => $category
    ));

    foreach ($categories as $category) {
        $category->children = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'hide_empty' => false,
            'parent' => $category->term_id,
        ));
    }

    return $categories;
}

function get_categories_with_children()
{
    $categories = get_categories(array(
        'orderby' => 'name',
        'order'   => 'ASC',
        'hide_empty' => false
    ));

    foreach ($categories as $category) {
        $category->children = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'hide_empty' => false,
            'parent' => $category->term_id,
        ));
    }

    return $categories;
}
