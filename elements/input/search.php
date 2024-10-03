<?php
function load_text_search($placeholder) {
    $search_icon = getImageString('/assets/images/icons/search.svg');
    
    echo <<<EOL
        <div class="search">
            <input id="search-id" type="text" placeholder="$placeholder" />
            <a class="action-search">
                $search_icon
            </a>
        </div>        
    EOL;
}
?>