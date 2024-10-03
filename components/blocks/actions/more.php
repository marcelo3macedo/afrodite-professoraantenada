<?php    
	global $lang;
    include_once __DIR__ . '/../../../helpers/category.php';
    include_once __DIR__ . '/../../../elements/gallery/categories.php';
    include_once __DIR__ . '/../../../elements/list/simple.php';

    $categories = get_list_categories_by_childen(CONST_MAIN_CATEGORY, $lang->menu->initial);
?>

<div class="action-more no-select">
    <div class="content">
        <a>
            <?php getImage('/assets/images/icons/more.svg') ?>
            <h3><?php getTextContent($lang->actions->more) ?></h3>
        </a>
    </div>
    <div class="options">
        <h3><?php getTextContent($lang->actions->content) ?></h3>        
    	<?php load_simple_list($categories) ?>
    </div>
</div>

        