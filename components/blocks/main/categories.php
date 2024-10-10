<?php
    include_once __DIR__ . '/../../../helpers/category.php';
    include_once __DIR__ . '/../../../elements/headers/main.php';
    include_once __DIR__ . '/../../../elements/list/simple.php';

    global $lang;

    $categories = get_list_categories_by_childen(CONST_MAIN_CATEGORY);
?>

<div class="categories md:w-96 px-8 py-8 md:py-0">
    <?php load_main_header($lang->categories->title) ?>
    <?php load_colored_list($categories) ?>

    <div class="fb-page" data-href="https://www.facebook.com/profantenada" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/profantenada" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profantenada">Professora Antenada</a></blockquote></div>
</div>