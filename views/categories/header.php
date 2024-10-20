<?php
$categoryData = get_query_var('categoryData');
?>


<div class="my-8 text-center px-2 md:px-0">
    <h2 class="text-2xl md:text-3xl font-bold text-violet-950 border-b-4 pb-4 border-violet-950">
        <?= $categoryData['category']->name; ?>
    </h2>
    <p class="py-8 text-justify text-lg">
        <?= $categoryData['category']->description; ?>
    </p>
</div>