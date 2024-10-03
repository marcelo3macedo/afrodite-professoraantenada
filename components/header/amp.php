<?php
    include_once __DIR__ . '/../../helpers/ads.php';
    include_once __DIR__ . '/../../helpers/seo.php';
    include_once __DIR__ . '/../../helpers/structure.php';
    include_once __DIR__ . '/../../helpers/styles.php';

    global $post;

    $seo = seo_generate($post);
?>

<!DOCTYPE html>
<html amp lang="pt-BR">
<head>
    <?php load_amp_structure() ?>
    <?php seo_basics($seo) ?>
    <?php styles_amp() ?>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
</head>
<body>
    <?php load_amp_ads() ?>