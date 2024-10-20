<?php
include_once __DIR__ . '/../../controllers/main.php';

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$mainData = get_main_data($page);
set_query_var('mainData', $mainData);
?>

<div class="bg-yellow-100">
    <div class="container mx-auto p-4 min-h-lvh md:flex">
        <div class="w-full px-1 my-8 md:my-0 md:w-3/4">
            <?php
            get_template_part("views/main/posts");
            ?>
        </div>
        <div class="w-full my-8 md:my-0 md:w-1/4 px-1">
            <?php
            get_template_part("views/main/categories");
            ?>
        </div>
    </div>
</div>