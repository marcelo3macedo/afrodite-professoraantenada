<?php

  function getTextContent($value) {
    echo $value;
  }

  function getTextMultiLineContent($tag, $value) {
    $items = explode('|', $value);

    foreach ($items as $item) {
        echo "<$tag>$item</$tag>";
    }
  }

  function getImageString($path) {
    return file_get_contents(get_template_directory() . $path);
  }

  function getImage($path) {
    echo file_get_contents(get_template_directory() . $path);
  }

  function getImageUri($path) {
    echo get_template_directory_uri() . $path;
  }

?>