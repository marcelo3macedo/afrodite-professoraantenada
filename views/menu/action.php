<?php
include_once __DIR__ . '/../../helpers/amp.php';

$isAmp = checkAmpActivate();
$headerData = get_query_var('headerData');
?>

<?php if (!$isAmp): ?>
    <div class="block md:hidden">
        <button type="button" id="menu-action" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
            </svg>
        </button>
        <div id="menu-mobile" class="hidden fixed left-0 top-[140px] bg-violet-950 w-full p-4">
            <?php if (is_array($headerData['categories'])): ?>
                <ul class="flex flex-col">
                    <?php foreach ($headerData['categories'] as $category): ?>
                        <li class="py-2">
                            <a
                                href="<?= $category->slug ?>"
                                class="block rounded-lg px-2 text-md text-white hover:opacity-80 hover:cursor-pointer">
                                <?= $category->name; ?>
                            </a>
                            <?php if (is_array($category->children)): ?>
                                <ul class="md:hidden mt-1 px-2">
                                    <?php foreach ($category->children as $children): ?>
                                        <li>
                                            <a
                                                href="/category/<?= $children->slug ?>"
                                                class="block rounded-lg px-4 py-2 text-md text-white hover:opacity-80 hover:cursor-pointer">
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
        </div>
    </div>
<?php endif ?>