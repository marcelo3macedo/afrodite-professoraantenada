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
			<?php getTextMultiLineContent('h1', $lang->privacyPolicy->title) ?>
			<?php getTextMultiLineContent('h2', $lang->privacyPolicy->subtitle) ?>
		</div>
	</div>
	<div class="block">
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->privacyPolicy->description) ?>
		</div>
	</div>
	<div class="block">
		<div class="title">
			<?php getTextMultiLineContent('h2', $lang->privacyPolicy->info->title) ?>
		</div>
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->privacyPolicy->info->description) ?>
		</div>
	</div>
	<div class="block">
		<div class="title">
			<?php getTextMultiLineContent('h1', $lang->privacyPolicy->share->title) ?>
		</div>
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->privacyPolicy->share->description) ?>
		</div>
	</div>
	<div class="block">
		<div class="title">
			<?php getTextMultiLineContent('h1', $lang->privacyPolicy->safe->title) ?>
		</div>
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->privacyPolicy->safe->description) ?>
		</div>
	</div>
	<div class="block">
		<div class="title">
			<?php getTextMultiLineContent('h1', $lang->privacyPolicy->rights->title) ?>
		</div>
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->privacyPolicy->rights->description) ?>
		</div>
	</div>
	<div class="block">
		<div class="title">
			<?php getTextMultiLineContent('h1', $lang->privacyPolicy->updates->title) ?>
		</div>
		<div class="body">
			<?php getTextMultiLineContent('h3', $lang->privacyPolicy->updates->description) ?>
		</div>
	</div>
</div>

<?php
	include_once 'components/footer/main.php';
?>