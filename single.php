<?php
	include_once 'components/header/main.php';
	include_once 'constants/loader.php';
	include_once 'helpers/category.php';
	include_once 'helpers/content.php';
	include_once 'helpers/posts.php';
	include_once 'elements/gallery/categories.php';
    
	global $lang;

	$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
	$lang = json_decode($json);

    $current_post_id = get_the_ID();
    $current_post = get_posts_by_id($current_post_id);
    $post_categories = get_main_complement_category($current_post->id);
    $related_posts = get_random_posts();
    
	include_once 'constants/loader.php';
	include_once 'components/header/main.php';
	include_once 'components/menu/main.php';
	include_once 'components/blocks/actions/more.php';
    include_once 'elements/gallery/posts.php';
?>

<div class="single bg-yellow-100 container mx-auto rounded-md py-2 px-4">
	<div class="flex items-center py-4 px-2 overflow-x-auto whitespace-nowrap">
		<a href="/" class="text-gray-600">
			<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
				<path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
			</svg>
		</a>

		<?php if (isset($post_categories) && !empty($post_categories)): ?>
			<?php foreach ($post_categories as $category): ?>
				<span class="mx-2 text-gray-500 rtl:-scale-x-100">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
					</svg>
				</span>
				<a href="/category/<?php echo $category->slug; ?>" class="text-gray-600 hover:underline">
					<?php echo $category->name; ?>
				</a>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
    <div class="header pt-4">
        <h1 class="font-bold"><?php getTextContent($current_post->post_title) ?></h1>
        <?php load_category_gallery($post_categories) ?>
    </div>

    <div class="content my-0">
        <?php getTextContent($current_post->post_content) ?>

		<div class="related my-8">
			<h2 class="font-bold text-xl text-center">Você também pode gostar de:</h2>
			<div class="my-4">
				<?php load_post_gallery($related_posts) ?>
			</div>
		</div>
    </div>
</div>

<?php
	include_once 'components/footer/main.php';
?>