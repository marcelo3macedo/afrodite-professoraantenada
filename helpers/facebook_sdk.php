<?php
function load_facebook_sdk() {
    echo <<<EOL
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v10.0&appId=1582589715924131&autoLogAppEvents=1" nonce="GupTq74a"></script>
    EOL;
}
?>