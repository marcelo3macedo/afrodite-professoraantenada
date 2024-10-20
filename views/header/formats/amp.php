<?php
$headerData = get_query_var('headerData');
?>
<!DOCTYPE html>
<html amp lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="canonical" href="./regular-html-version.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

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

    <!-- Styles -->
    <?= $headerData['amp']['style']; ?>

    <!-- Amp -->
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
</head>

<body>
    <amp-analytics type="gtag" data-credentials="include">
        <script type="application/json">
            {
                "vars": {
                    "gtag_id": "G-QN3Y56S0V9",
                    "config": {
                        "G-QN3Y56S0V9": {
                            "groups": "default"
                        }
                    }
                }
            }
        </script>
    </amp-analytics>