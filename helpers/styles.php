<?php
function styles_recover($url) {
    if (strstr($url, 'professoraantenada.dev.br')) {
        echo <<<EOL
            <link rel="stylesheet" href="$url/assets/css/style_generated.css">
        EOL;
        return;
    }

    echo <<<EOL
        <link rel="stylesheet" href="$url/assets/css/style.min.css">
    EOL;
}

function styles_amp() {
	$content = file_get_contents(get_template_directory() . '/assets/css/style.css');

    echo <<<EOL

        <style amp-custom>
            $content
        </style>
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        
    EOL;
}
?>