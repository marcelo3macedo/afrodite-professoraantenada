<?php
$singleData = get_query_var('singleData');
?>

<article class="flex py-4">
    <?php if (is_array($singleData['categories'])): ?>
        <?php foreach ($singleData['categories'] as $category): ?>
            <div class="bg-yellow-500 text-white px-4 py-2 mr-2 rounded-md font-bold">
                <a href="/category/<?= $category->slug; ?>">
                    <div class="container noselect">
                        <h4><?= $category->name; ?></h4>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</article>