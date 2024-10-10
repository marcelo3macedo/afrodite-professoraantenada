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
    $excerpt_parts = explode('|', $post->excerpt);
    $excerpt_first = isset($excerpt_parts[0]) ? trim($excerpt_parts[0]) : '';

    return <<<EOL
        <div class="post no-select">
            <a href="$post->link">
                <div class="container noselect px-8">
                    <div class="image">
                        <img src="$post->thumbnail" alt="$post->title" class="mx-auto h-52">
                    </div>
                    <div class="hover-info flex flex-col">
                        <h4 class="font-bold">$post->title</h4>
                        <p class="text-sm">$excerpt_first</p>
                    </div>
                </div>
            </a>
        </div>
    EOL;
}

?>