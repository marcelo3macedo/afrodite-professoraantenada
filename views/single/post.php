<?php
include_once __DIR__ . '/../../helpers/amp.php';

$singleData = get_query_var('singleData');
$isAmp = checkAmpActivate();
$content = $singleData['post']->post_content;

if ($isAmp) {
    $postContent = html_entity_decode($singleData['post']->post_content);
    $content = str_replace(['target="_blanks"', 'onClick="downloadPostImage(this)"'], ['', ''], $postContent);
}
?>

<article class="content my-8">
    <?= $content; ?>
</article>