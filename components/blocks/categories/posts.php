<?php
    include_once __DIR__ . '/../../../helpers/category.php';
    include_once __DIR__ . '/../../../helpers/posts.php';
    include_once __DIR__ . '/../../../elements/headers/main.php';
    include_once __DIR__ . '/../../../elements/gallery/posts.php';

    global $lang;

    $current_category = get_queried_object();
    $category_id = get_category_id($current_category);
    $page_id = get_query_var('page') ? get_query_var('page') : 1;

    $categories = get_list_categories_by_childen(CONST_MAIN_CATEGORY);
    $posts = get_posts_by_category($category_id, $page_id);

    $has_more = count($posts) === 12;
?>

<div class="px-2 md:px-0">
	<div class="posts">
		<?php load_post_gallery($posts) ?>
	</div>
    <?php if ($has_more): ?>
        <a href="?page=<?php echo $page_id + 1; ?>" class="mx-auto">
            <div class="mx-auto mb-20 mt-10">
                <div class="bg-violet-950 w-96 mx-auto text-center p-4 rounded-lg">
                    <h4 class="text-white text-md"><?php getTextContent($lang->actions->more) ?></h4>
                </div>
            </div>
        </a>
    <?php endif; ?>
</div>