<?php
	global $lang;

	$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
	$lang = json_decode($json);
	$socialJson = file_get_contents(get_template_directory() . '/assets/data/social.json');
    $social_items = json_decode($socialJson);

	include_once 'constants/loader.php';
	include_once 'components/header/main.php';
	include_once 'components/menu/main.php';
	include_once 'helpers/content.php';
    include_once 'elements/gallery/social.php';
?>

<div class="page container">
	<div class="block">
		<div class="title">
			<?php getTextMultiLineContent('h1', $lang->help->title) ?>
		</div>
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->help->description) ?>
		</div>
	</div>
	<div class="block">
		<div class="title">
			<?php getTextMultiLineContent('h2', $lang->help->contact->title) ?>
		</div>
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->help->contact->description) ?>
		</div>
	</div>
	<div class="block social">
		<?php load_social_gallery($social_items) ?>
	</div>
</div>

<?php
	include_once 'components/footer/main.php';
?>