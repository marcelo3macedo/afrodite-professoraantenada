<?php
$headerData = get_query_var('headerData');

if (is_array($headerData['categories'])): ?>
    <ul class="hidden md:flex items-center justify-center">
        <?php foreach ($headerData['categories'] as $category): ?>
            <li>
                <a
                    href="<?= $category->slug ?>"
                    class="block rounded-lg px-4 text-lg font-bold text-white hover:opacity-80 hover:cursor-pointer">
                    <?= $category->name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>