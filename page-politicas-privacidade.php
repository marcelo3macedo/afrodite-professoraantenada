<?php
global $lang;

$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
$lang = json_decode($json);

include_once 'controllers/categories.php';
include_once 'helpers/content.php';
?>

<?php
get_template_part("views/header/main");
?>
<div class="container mx-auto p-4 min-h-lvh md:flex w-full">
	<section class="bg-yellow-50 p-4 rounded-xl w-full">
		<h1 class="text-2xl font-bold pt-2 text-violet-950"><?= $lang->privacyPolicy->title; ?></h1>
		<p class="text-sm"><?= $lang->privacyPolicy->subtitle; ?></p>
		<div class="my-4">
			<p class="text-lg my-2"><?= $lang->privacyPolicy->description; ?></p>
		</div>
		<div class="my-4">
			<div class="font-bold">
				<?php getTextMultiLineContent('h3', $lang->privacyPolicy->info->title) ?>
			</div>
			<?php getTextMultiLineContent('p', $lang->privacyPolicy->info->description) ?>
		</div>
		<div class="my-4">
			<div class="font-bold">
				<?php getTextMultiLineContent('h3', $lang->privacyPolicy->share->title) ?>
			</div>
			<?php getTextMultiLineContent('p', $lang->privacyPolicy->share->description) ?>
		</div>
		<div class="my-4">
			<div class="font-bold">
				<?php getTextMultiLineContent('h3', $lang->privacyPolicy->safe->title) ?>
			</div>
			<?php getTextMultiLineContent('p', $lang->privacyPolicy->safe->description) ?>
		</div>
		<div class="my-4">
			<div class="font-bold">
				<?php getTextMultiLineContent('h3', $lang->privacyPolicy->rights->title) ?>
			</div>
			<?php getTextMultiLineContent('p', $lang->privacyPolicy->rights->description) ?>
		</div>
		<div class="my-4">
			<div class="font-bold">
				<?php getTextMultiLineContent('h3', $lang->privacyPolicy->updates->title) ?>
			</div>
			<?php getTextMultiLineContent('p', $lang->privacyPolicy->updates->description) ?>
		</div>
	</section>
</div>

<?php
get_template_part("views/footer/bar");
?>