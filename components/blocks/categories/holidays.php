<?php
    include_once __DIR__ . '/../../../elements/gallery/shortcuts.php';
    include_once __DIR__ . '/../../../elements/gallery/posts.php';
    include_once __DIR__ . '/../../../helpers/content.php';
    include_once __DIR__ . '/../../../helpers/holidays.php';
    include_once __DIR__ . '/../../../helpers/posts.php';

    global $lang;

    $current_category = get_queried_object();
    $category_id = get_category_id($current_category);

	$page_id = get_query_var('paged') ? get_query_var('paged') : 1;
	$json = file_get_contents(get_template_directory() . '/assets/data/holidays.json');

	$holidays = json_decode($json);
	$next_holidays = get_next_holidays($holidays);
    $posts = get_posts_by_category($category_id, $page_id);
?>

<div class="category-page container">
	<div class="header">
		<h2><?php getTextContent($current_category->name) ?></h2>
	</div>
	<div class="holidays">
		<?php load_shortcut_gallery($next_holidays) ?>
	</div>
	<div class="posts">
		<h3><?php getTextContent($lang->posts->title) ?></h3>
    	<?php load_post_gallery($posts) ?>
	</div>
	<div class="more">
        <h4><?php getTextContent($lang->actions->more) ?></h4>
    </div>
</div>