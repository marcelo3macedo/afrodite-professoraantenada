<?php
    include_once __DIR__ . '/../../helpers/ads.php';
    include_once __DIR__ . '/../../helpers/structure.php';
    include_once __DIR__ . '/../../helpers/seo.php';
    include_once __DIR__ . '/../../helpers/styles.php';
    include_once __DIR__ . '/../../helpers/fonts.php';
    include_once __DIR__ . '/../../helpers/facebook_sdk.php';
    
    global $post;

    $seo = seo_generate($post);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php load_structure() ?>
    <?php seo_basics($seo) ?>
    <?php styles_recover(get_template_directory_uri()) ?>
    <?php load_fonts() ?>
    <?php load_ads() ?>
</head>
<body class="bg-slate-50">
  <?php load_facebook_sdk() ?>
