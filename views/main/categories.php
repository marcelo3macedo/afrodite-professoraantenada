<?php
$mainData = get_query_var('mainData');
?>

<section class="flex flex-col justify-start border-l min-h-screen bg-yellow-50 p-4 rounded-xl">
    <?php if (is_array($mainData['categories'])): ?>
        <h2 class="text-2xl font-bold py-2 text-violet-950 border-b-2 border-violet-950">
            <?= $mainData['categoryTitle']; ?>
        </h2>
        <ul class="mt-4 space-y-1">
            <?php foreach ($mainData['categories'] as $category): ?>
                <li>
                    <a
                        href="/category/<?= $category->slug ?>"
                        class="block rounded-lg px-4 py-1 text-lg font-bold text-violet-950 hover:opacity-80 hover:cursor-pointer">
                        <?= $category->name; ?>
                    </a>
                    <?php if (is_array($category->children)): ?>
                        <ul class="mt-1 px-2">
                            <?php foreach ($category->children as $children): ?>
                                <li>
                                    <a
                                        href="/category/<?= $children->slug ?>"
                                        class="block rounded-lg px-4 py-2 text-md text-violet-950 hover:opacity-80 hover:cursor-pointer">
                                        <?= $children->name; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <div class="my-8">
        <?php
        get_template_part("views/main/social"); ?>
    </div>
</section>