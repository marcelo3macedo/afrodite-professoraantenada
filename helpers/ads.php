<?php
function load_ads() {
    echo <<<EOL
        <meta name="google-site-verification" content="OyoCZM9SKtwKT5xOLaXe2LSD2hlxMCUdkl9EBYapilE" />
        
        <script data-ad-client="ca-pub-9829912735551664" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>    
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QN3Y56S0V9"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-QN3Y56S0V9');
        </script>
    EOL;
}

function load_amp_ads() {
    echo <<<EOL
        
        <amp-analytics type="gtag" data-credentials="include">
        <script type="application/json">
        {
        "vars" : {
            "gtag_id": "G-QN3Y56S0V9",
            "config" : {
            "G-QN3Y56S0V9": { "groups": "default" }
            }
        }
        }
        </script>
        </amp-analytics>

    EOL;
}
?>