<?php
function load_social_gallery($items) {
    $social = '';
    
    foreach ($items as $item) {
        $social.= load_social($item);
    }
    
    echo <<<EOL
        <div class="social">{$social}</div>
    EOL;
}

function load_social($social) {
    $thumbnail = get_template_directory_uri() . '/' . $social->thumbnail;

    return <<<EOL
        <div class="item">
            <a href="$social->link">
                <div class="container noselect">
                    <div class="image">			
                        <img src="$thumbnail" alt="$social->title">
                    </div>
                </div>
            </a>
        </div>
    EOL;
}
?>