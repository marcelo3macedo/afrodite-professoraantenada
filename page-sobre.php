<?php
	global $lang;

	$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
	$lang = json_decode($json);

	include_once 'constants/loader.php';
	include_once 'components/header/main.php';
	include_once 'components/menu/main.php';
	include_once 'helpers/content.php';
?>

<div class="page container">
	<div class="block">
		<div class="title">
			<?php getTextMultiLineContent('h1', $lang->about->title) ?>
		</div>
	</div>
	<div class="block">
		<div class="body">
			<?php getTextMultiLineContent('h2', $lang->about->subtitle) ?>
			<?php getTextMultiLineContent('h3', $lang->about->description) ?>
		</div>
	</div>
	<div class="block">
		<div class="title">
			<?php getTextMultiLineContent('h2', $lang->about->goal->title) ?>
		</div>
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->about->goal->description) ?>
		</div>
	</div>
	<div class="block">
		<div class="title">
			<?php getTextMultiLineContent('h1', $lang->about->content->title) ?>
		</div>
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->about->content->description) ?>
		</div>
	</div>
	<div class="block">
		<div class="title">
			<?php getTextMultiLineContent('h1', $lang->about->contact->title) ?>
		</div>
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->about->contact->description) ?>
		</div>
	</div>
	<div class="block">
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->about->contact->thanks) ?>
			<?php getTextMultiLineContent('h3', $lang->blog->name) ?>
		</div>
	</div>
</div>

<?php
	include_once 'components/footer/main.php';
?>