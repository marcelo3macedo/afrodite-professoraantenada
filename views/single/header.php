<?php
$singleData = get_query_var('singleData');
?>

<article class="border-b-4 border-violet-300">
    <div class="pt-4">
        <h1 class="font-bold text-3xl text-violet-950">
            <?= $singleData['post']->post_title; ?>
        </h1>
    </div>
    <?php
    get_template_part("views/single/categories");
    ?>
</article>