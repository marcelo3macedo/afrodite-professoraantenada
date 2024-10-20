<?php
include_once 'constants.php';

function get_standard_url()
{
    $templateUrl = get_template_directory_uri();
    $file = (strstr($templateUrl, CONST_PROD_WEBSITE_URL)) ?
        '/assets/css/style_generated.min.css?v=' . CONST_VERSION :
        '/assets/css/style_generated.css?v=' . CONST_VERSION;

    return $templateUrl . $file;
}

function get_amp_content()
{
    $content = file_get_contents(get_template_directory() . '/assets/css/style_generated_amp.css');

    return
        <<<EOL
        <style amp-custom>
            $content
        </style>
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    EOL;
}
