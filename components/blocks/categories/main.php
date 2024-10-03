<?php
    include_once __DIR__ . '/../../../helpers/category.php';
    include_once __DIR__ . '/../../../helpers/posts.php';
    include_once __DIR__ . '/../../../elements/headers/main.php';
    include_once __DIR__ . '/../../../elements/gallery/posts.php';

    global $lang;

    $current_category = get_queried_object();
    $category_id = get_category_id($current_category);
    $page_id = get_query_var('paged') ? get_query_var('paged') : 1;

    $categories = get_list_categories_by_childen(CONST_MAIN_CATEGORY);
    $posts = get_posts_by_category($category_id, $page_id);
?>

<div class="category-page container">
	<div class="header">
		<h2><?php getTextContent($current_category->name) ?></h2>
	</div>
	<div class="posts">
		<?php load_post_gallery($posts) ?>
	</div>
	<div class="more">
        <h4><?php getTextContent($lang->actions->more) ?></h4>
    </div>
</div>