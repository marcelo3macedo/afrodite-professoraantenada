<?php
include_once 'controllers/search.php';

$pageId = get_query_var('page') ? get_query_var('page') : 1;
$query = get_query_var('s') ? get_query_var('s') : '';

$searchData = get_search_data($query, $pageId);
set_query_var('searchData', $searchData);
?>

<?php
get_template_part("views/header/main");
?>

<div class="container mx-auto p-4 min-h-lvh md:flex">
	<?php
	get_template_part("views/search/content");
	?>
</div>

<?php
get_template_part("views/footer/bar");
