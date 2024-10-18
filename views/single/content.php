<?php
include_once __DIR__ . '/../../controllers/single.php';

$postId = get_the_ID();
$singleData = get_single_data($postId);

set_query_var('singleData', $singleData);
?>
<section class="single bg-yellow-50 p-4 rounded-xl w-full">
    <?php
    get_template_part("views/single/breadcrumb");
    get_template_part("views/single/header");
    get_template_part("views/single/post");
    get_template_part("views/single/related");
    ?>
</section>