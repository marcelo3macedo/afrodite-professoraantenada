<?php
    include_once __DIR__ . '/../../../elements/headers/main.php';
    include_once __DIR__ . '/../../../elements/gallery/posts.php';
    include_once __DIR__ . '/../../../helpers/posts.php';
    
    global $lang;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $posts_per_page = 12;
    
    $posts = get_latest_posts($page, $posts_per_page);
?>

<div class="news w-full py-8 md:py-0">
    <?php load_main_header($lang->news->title) ?>
    <?php load_post_gallery($posts) ?>

    <div class="flex items-center justify-center w-full my-4">
        <a href="?page=<?php echo max(1, $page - 1); ?>" class="flex items-center px-4 py-2 mx-1 text-gray-500 bg-white rounded-md <?php echo ($page <= 1) ? 'cursor-not-allowed' : 'hover:bg-violet-950 hover:text-white'; ?> ">
            Anterior
        </a>

        <?php if (count($posts) == $posts_per_page): ?>
            <a href="?page=<?php echo $page + 1; ?>" 
            class="flex items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md hover:bg-violet-950 hover:text-white">
                Próximo
            </a>
        <?php endif; ?>
    </div>
</div>

