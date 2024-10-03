<?php
function load_shortcut_gallery($items) {
    $shortcuts = '';

    foreach ($items as $item) {
        $shortcuts.= load_shortcut($item);
    }
    
    echo <<<EOL
        <div class="shortcuts">{$shortcuts}</div>
    EOL;
}

function load_shortcut($shortcut) {
    $thumbnail = get_template_directory_uri() . '/' . $shortcut->thumbnail;

    return <<<EOL
        <div class="shortcut">
            <a href="$shortcut->link">
                <div class="container noselect">
                    <div class="image">			
                        <img src="$thumbnail" alt="$shortcut->name">                        
                    </div>
                    <div class="details">
                        <h4>$shortcut->name</h4>    
                    </div>
                </div>
            </a>
        </div>
    EOL;
}
?>