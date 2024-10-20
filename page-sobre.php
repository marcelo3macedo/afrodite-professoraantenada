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
		<h1 class="text-2xl font-bold py-2 text-violet-950"><?= $lang->about->title; ?></h1>
		<div class="my-2">
			<p class="text-lg my-2"><?= $lang->about->subtitle; ?></p>
			<p class="text-lg"><?= $lang->about->description; ?></p>
		</div>
		<div class="my-4">
			<p class="text-lg my-2"><?= $lang->about->goal->title; ?></p>
			<p class="text-lg"><?= $lang->about->goal->description; ?></p>
		</div>
		<div class="my-4">
			<div class="font-bold">
				<?php getTextMultiLineContent('h3', $lang->about->content->title) ?>
			</div>
			<?php getTextMultiLineContent('p', $lang->about->content->description) ?>
		</div>
		<div class="my-4">
			<div class="font-bold">
				<?php getTextMultiLineContent('h3', $lang->about->contact->title) ?>
			</div>
			<?php getTextMultiLineContent('p', $lang->about->contact->description) ?>
		</div>
		<div class="my-4">
			<p class="text-lg my-2"><?= $lang->about->contact->thanks; ?></p>
			<p class="text-lg"><?= $lang->blog->name; ?></p>
		</div>
	</section>
</div>

<?php
get_template_part("views/footer/bar");
?>