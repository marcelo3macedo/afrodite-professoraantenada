<?php
include_once 'controllers/categories.php';

$category = get_queried_object();
$pageId = get_query_var('page') ? get_query_var('page') : 1;

$categoryData = get_category_data($category->term_id, $pageId);
set_query_var('categoryData', $categoryData);
?>

<?php
get_template_part("views/header/main");
?>

<div class="container mx-auto p-4 min-h-lvh md:flex">
	<?php
	get_template_part("views/categories/content");
	?>
</div>

<?php
get_template_part("views/footer/bar"); ?>