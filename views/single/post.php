<?php
$singleData = get_query_var('singleData');
?>

<article class="content my-8">
    <?= $singleData['post']->post_content; ?>
</article>