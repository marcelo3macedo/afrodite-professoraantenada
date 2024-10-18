<?php
global $lang;

$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
$lang = json_decode($json);

include_once 'constants/loader.php';
include_once 'components/header/main.php';
include_once 'components/menu/main.php';
include_once 'controllers/categories.php';

$categoryData = get_categories_data();
set_query_var('categoryData', $categoryData);
?>

<div class="bg-yellow-100">
	<div class="w-full my-8 md:my-0 px-1">
		<?php
		get_template_part("views/categories/categories");
		?>
	</div>
</div>

<?php
include_once 'components/footer/main.php';
?>