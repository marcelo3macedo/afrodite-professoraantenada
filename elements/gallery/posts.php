<?php
function load_post_gallery($items) {
    $posts = '';

    foreach ($items as $item) {
        $posts.= load_post($item);
    }
    
    echo <<<EOL
        <div class="gallery">{$posts}</div>
    EOL;
}

function load_post($post) {
    return <<<EOL
        <div class="post no-select">
            <a href="$post->link">
                <div class="container noselect px-8">
                    <div class="image">
                        <img src="$post->thumbnail" alt="$post->title" class="mx-auto h-52">
                    </div>
                    <div class="hover-info">
                        <h4 class="font-bold">$post->title</h4>
                    </div>
                </div>
            </a>
        </div>
    EOL;
}

?>