<?php
global $lang;

$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
$lang = json_decode($json);

$category = get_queried_object();
$pageId = get_query_var('page') ? get_query_var('page') : 1;

include_once 'constants/loader.php';
include_once 'components/header/main.php';
include_once 'components/menu/main.php';
include_once 'helpers/content.php';
include_once 'controllers/categories.php';

$categoryData = get_category_data($category->term_id, $pageId);
set_query_var('categoryData', $categoryData);
?>


<div class="container mx-auto p-4 min-h-lvh md:flex">
	<?php
	get_template_part("views/categories/content");
	?>
</div>

<?php include_once 'components/footer/main.php'; ?>