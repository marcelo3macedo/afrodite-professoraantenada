<?php
function load_main_header($name) {
    echo <<<EOL
        <div class="header">
            <h1 class="font-bold text-md">$name</h1>
        </div>        
    EOL;
}
?>