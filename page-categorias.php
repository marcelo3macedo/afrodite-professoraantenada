<?php
include_once 'controllers/categories.php';

$categoryData = get_categories_data();
set_query_var('categoryData', $categoryData);
?>

<?php
get_template_part("views/header/main");
?>

<div class="bg-yellow-100 container mx-auto my-4">
	<div class="w-full my-8 md:my-0 px-1">
		<?php
		get_template_part("views/categories/categories");
		?>
	</div>
</div>

<?php
get_template_part("views/footer/bar"); ?>