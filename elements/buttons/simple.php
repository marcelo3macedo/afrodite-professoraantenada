<?php
function load_simple_button($title) {
    echo <<<EOL
        <div class="simple-button">
            <a>
                <h4>$title</h4>
            </a>
        </div>
    EOL;
}
?>