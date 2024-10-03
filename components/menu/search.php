<?php
    global $lang;

    include_once __DIR__ . '/../../elements/input/search.php';
    include_once __DIR__ . '/../../elements/gallery/shortcuts.php';
    include_once __DIR__ . '/../../elements/buttons/simple.php';
    include_once __DIR__ . '/../../helpers/holidays.php';

    $search_holidays_available = 6;
	$json = file_get_contents(get_template_directory() . '/assets/data/holidays.json');

	$holidays = json_decode($json);
	$next_holidays = get_next_holidays($holidays, $search_holidays_available);
?>

<div class="menu-search">
    <div class="wrapper">
        <div class="content">
            <div class="header">
                <?php load_text_search($lang->search->placeholder) ?>
            </div>
            <div class="action">
		        <?php load_simple_button($lang->search->cancel_action) ?>
            </div>
            <div class="body">
		        <?php load_shortcut_gallery($next_holidays) ?>
            </div>
        </div>
    </div>
</div>