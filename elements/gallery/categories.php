<?php
function load_category_gallery($items) {
    $categories = '';

    foreach ($items as $item) {
        $categories.= load_category($item);
    }
    
    echo <<<EOL
        <div class="w-full flex my-2 no-select">{$categories}</div>
    EOL;
}

function load_category($category) {
    return <<<EOL
        <div class="bg-yellow-500 text-white px-4 py-2 mr-2 rounded-md font-bold">
            <a href="/category/$category->slug">
                <div class="container noselect">
                    <h4>$category->name</h4>
                </div>
            </a>
        </div>
    EOL;
}
?>