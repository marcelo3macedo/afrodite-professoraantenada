<?php
$headerData = get_query_var('headerData');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Structure -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= $headerData['stylesUrl']; ?>">

    <!-- Seo -->
    <title><?= $headerData['seo']['title']; ?></title>
    <meta name="description" content="<?= $headerData['seo']['description']; ?>">
    <meta name="keywords" content="<?= $headerData['seo']['keywords']; ?>">
    <link rel="icon" href="<?= $headerData['seo']['icon']; ?>">
    <link rel="amphtml" href="<?= $headerData['seo']['ampUrl']; ?>">

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $headerData['seo']['title']; ?>" />
    <meta property="og:description" content="<?= $headerData['seo']['description']; ?>" />
    <meta property="og:url" content="<?= $headerData['seo']['actualUrl']; ?>" />
    <meta property="og:site_name" content="<?= $headerData['seo']['name']; ?>" />
    <meta property="og:image" content="<?= $headerData['seo']['socialSrc']; ?>" />
    <meta property="og:image:secure_url" content="<?= $headerData['seo']['socialSrc']; ?>" />
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <meta property="og:updated_time" content="<?= $headerData['seo']['updatedTime']; ?>" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="<?= $headerData['seo']['description']; ?>" />
    <meta name="twitter:title" content="<?= $headerData['seo']['title']; ?>" />

    <!-- Tags -->
    <?php if (is_array($headerData['seo']['tags'])): ?>
        <?php foreach ($headerData['seo']['tags'] as $tag): ?>
            <meta property="article:tag" content="<?= $tag; ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">

    <!-- Adsense -->
    <meta name="google-site-verification" content="OyoCZM9SKtwKT5xOLaXe2LSD2hlxMCUdkl9EBYapilE" />
    <script data-ad-client="ca-pub-9829912735551664" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QN3Y56S0V9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-QN3Y56S0V9');
    </script>
</head>

<body class="bg-yellow-100">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v10.0&appId=1582589715924131&autoLogAppEvents=1" nonce="GupTq74a"></script>