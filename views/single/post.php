<?php
include_once __DIR__ . '/../../helpers/amp.php';

$singleData = get_query_var('singleData');
$isAmp = checkAmpActivate();
$content = replace_youtube_embed($singleData['post']->post_content);

function replace_youtube_embed($content) {
    $pattern = '/https:\/\/(?:www\.)?youtube\.com\/(?:watch\?v=|shorts\/)([a-zA-Z0-9_-]+)/i';
    $replacement = '<iframe width="560" height="315" src="https://www.youtube.com/embed/$1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

    return preg_replace($pattern, $replacement, $content);
}

if ($isAmp) {
    $postContent = html_entity_decode($singleData['post']->post_content);
    $content = str_replace(['target="_blanks"', 'onClick="downloadPostImage(this)"'], ['', ''], $postContent);
}
?>

<article class="content my-8">
    <?= $content; ?>
</article>