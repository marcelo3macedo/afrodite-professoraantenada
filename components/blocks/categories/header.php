<?php
    include_once __DIR__ . '/../../../helpers/content.php';
    
    $current_category = get_queried_object();
?>

<div class="my-8 text-center">
    <h2 class="text-3xl font-bold text-violet-950 border-b-4 pb-4 border-violet-950">
        <?php getTextContent($current_category->name) ?>
    </h2>
    <p class="py-8 text-justify text-1xl">
        <?php getTextContent($current_category->description) ?>
    </p>
</div>