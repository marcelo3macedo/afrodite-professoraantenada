<?php
function load_simple_list($items) {
    $topicsHTML = '';

    foreach ($items as $item) {
        $topicsHTML.= <<<EOL
            <a href="{$item->url}" class="block px-3 font-bold py-2 text-gray-100 rounded-lg hover:bg-violet-900">{$item->title}</a>
        EOL;
    }
    
    echo "{$topicsHTML}";
}

function load_colored_list($items) {
    $topicsHTML = '';

    foreach ($items as $item) {
        $topicsHTML.= <<<EOL
            <a href="{$item->url}" class="block px-3 py-2 text-black rounded-lg hover:bg-violet-50">{$item->title}</a>
        EOL;
    }
    
    echo "{$topicsHTML}";
}
?>