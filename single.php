<?php
global $lang;

$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
$lang = json_decode($json);

include_once 'constants/loader.php';
include_once 'components/header/main.php';
include_once 'components/menu/main.php';

$postId = get_the_ID();
?>

<div class="container mx-auto p-4 min-h-lvh md:flex w-full">
	<?php
	get_template_part("views/single/content");
	?>
</div>


<?php
get_template_part("views/footer/bar");
?>