<?php
global $lang;

$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
$lang = json_decode($json);

include_once 'constants/loader.php';
include_once 'components/header/main.php';
include_once 'components/menu/main.php';
?>


<?php
get_template_part("views/footer/bar")
?>