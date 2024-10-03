<?php
    global $lang;
    include_once __DIR__ . '/../../helpers/content.php';
    include_once __DIR__ . '/../../helpers/category.php';
    include_once __DIR__ . '/../../elements/list/simple.php';
    include_once __DIR__ . '/../../elements/gallery/social.php';

    $categories = get_list_categories_by_childen(CONST_MAIN_CATEGORY);
	$json = file_get_contents(get_template_directory() . '/assets/data/social.json');
    $social_items = json_decode($json);
?>

<div class="menu-sidebar">
    <div class="wrapper">
        <div class="content">
            <div class="header">
                <img src="<?php getImageUri('/assets/images/icon.png') ?>" alt="<?php getTextContent($lang->blog->name) ?>" />
            </div>
            <div class="body">
                <h3><?php getTextContent($lang->sidebar->title) ?></h3>
                <div class="categories">
                    <?php load_simple_list($categories) ?>
                </div>
            </div>
        </div>
        <div class="footer">
            <h3><?php getTextContent($lang->sidebar->want_know_more) ?></h3>
            <?php load_social_gallery($social_items) ?>
        </div>
    </div>
</div>