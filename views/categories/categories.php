<?php
$categoryData = get_query_var('categoryData');
?>

<section class="flex flex-col justify-start border-l min-h-screen bg-yellow-50 p-4 rounded-xl">
    <?php if (is_array($categoryData['categories'])): ?>
        <ul class="grid grid-cols-1 gap-8 mt-4 xl:gap-4 md:grid-cols-4 space-y-1">
            <?php foreach ($categoryData['categories'] as $category): ?>
                <li class="border-b-2 bg-slate-50 rounded-lg p-4">
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
</section>