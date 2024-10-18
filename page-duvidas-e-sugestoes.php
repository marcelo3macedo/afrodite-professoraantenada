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

<div class="container mx-auto p-4 min-h-lvh md:flex w-full">
	<section class="bg-yellow-50 p-4 rounded-xl w-full">
		<h1 class="text-2xl font-bold py-2 text-violet-950"><?= $lang->help->title; ?></h1>
		<div class="my-2">
			<p class="text-lg"><?= $lang->help->description; ?></p>
		</div>
		<div class="my-4">
			<div class="font-bold">
				<?php getTextMultiLineContent('h3', $lang->help->contact->title) ?>
			</div>
			<?php getTextMultiLineContent('p', $lang->help->contact->description) ?>
		</div>
		<div class="my-4 flex">
			<?php if (is_array($social_items)): ?>
				<?php foreach ($social_items as $item): ?>
					<div class="item">
						<a href="<?= $item->link; ?>">
							<div class="container noselect">
								<div class="image">
									<img class="w-20 px-4" src="<?= get_template_directory_uri() . '/' . $item->thumbnail; ?>" alt="<?= $item->title; ?>">
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</section>
</div>

<?php
get_template_part("views/footer/bar");
?>