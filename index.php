<?php
	global $lang;

	$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
	$lang = json_decode($json);

	include_once 'constants/loader.php';
	include_once 'components/header/main.php';
	include_once 'components/menu/main.php';
?>

<?php
	include_once 'components/blocks/main/content.php';
	include_once 'components/footer/main.php';
?>

