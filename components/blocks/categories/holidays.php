<?php
    include_once __DIR__ . '/../../../elements/gallery/shortcuts.php';
    include_once __DIR__ . '/../../../elements/gallery/posts.php';
    include_once __DIR__ . '/../../../helpers/content.php';
    include_once __DIR__ . '/../../../helpers/holidays.php';
    include_once __DIR__ . '/../../../helpers/posts.php';

    global $lang;

    $current_category = get_queried_object();
    $category_id = get_category_id($current_category);

	$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
	$json = file_get_contents(get_template_directory() . '/assets/data/holidays.json');

	$holidays = json_decode($json);
	$next_holidays = get_next_holidays($holidays);
    $posts = get_posts_by_category($category_id, $page);
    $posts_per_page = 12;
?>

<div class="category-page container">
	<div class="header">
		<h2 class="mt-10 text-4xl text-center font-bold"><?php getTextContent($current_category->name) ?></h2>
	</div>
	<div class="posts">
		<?php load_post_gallery($posts) ?>
	</div>
	<div class="flex items-center justify-center w-full my-4">
        <a href="?page=<?php echo max(1, $page - 1); ?>" class="flex items-center px-4 py-2 mx-1 text-gray-500 bg-white rounded-md <?php echo ($page <= 1) ? 'cursor-not-allowed' : 'hover:bg-violet-950 hover:text-white'; ?> ">
            Anterior
        </a>

        <?php if (count($posts) == $posts_per_page): ?>
            <a href="?page=<?php echo $page + 1; ?>" 
            class="flex items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md hover:bg-violet-950 hover:text-white">
                Próximo
            </a>
        <?php endif; ?>
    </div>
</div>