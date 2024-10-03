<?php
	include_once 'constants/loader.php';
	include_once 'components/header/main.php';
	include_once 'components/menu/main.php';
	include_once 'helpers/content.php';
    include_once 'elements/gallery/shortcuts.php';
    include_once 'elements/gallery/posts.php';
    include_once 'helpers/content.php';
    include_once 'helpers/holidays.php';
    include_once 'helpers/posts.php';

    global $lang;

	$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
	$lang = json_decode($json);

    $holidaysJSON = file_get_contents(get_template_directory() . '/assets/data/holidays.json');

	$holidays = json_decode($holidaysJSON);
	$next_holidays = get_next_holidays($holidays, 20);
?>

<div class="container">
	<div class="holidays">
		<?php load_shortcut_gallery($next_holidays) ?>
	</div>
</div>

<?php
	include_once 'components/footer/main.php';
?>