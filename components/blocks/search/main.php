<?php
    include_once __DIR__ . '/../../../helpers/category.php';
    include_once __DIR__ . '/../../../helpers/posts.php';
    include_once __DIR__ . '/../../../elements/headers/main.php';
    include_once __DIR__ . '/../../../elements/gallery/posts.php';

    global $lang;

    $search_query = get_query_var('s') ? get_query_var('s') : '';
    $title = $lang->search->results . ' ' . $search_query;
    $page_id = get_query_var('paged') ? get_query_var('paged') : 1;

    $posts = get_posts_by_query($search_query, $page_id);
?>

<div class="container">
	<div class="header">
		<h2><?php getTextContent($title) ?></h2>
	</div>
	<div class="posts">
		<?php load_post_gallery($posts) ?>
	</div>
</div>