<?php
	include_once 'components/header/main.php';
	include_once 'constants/loader.php';
	include_once 'helpers/category.php';
    
	global $lang;

	$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
	$lang = json_decode($json);
	
    $current_category = get_queried_object();
    $is_main = check_if_category_is_main($current_category);

	include_once 'constants/loader.php';
	include_once 'components/header/main.php';
	include_once 'components/menu/main.php';
?>
<?php 
    $is_main ?
        include_once 'components/blocks/categories/holidays.php' :
        include_once 'components/blocks/categories/main.php';

	include_once 'components/footer/main.php';
?>