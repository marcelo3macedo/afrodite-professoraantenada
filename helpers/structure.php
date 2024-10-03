<?php
  function load_structure() {    
    echo <<<EOL
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <script src="//unpkg.com/alpinejs" defer></script>
    EOL;
  }

  function load_amp_structure() {    
    echo <<<EOL
        <meta charset="UTF-8">
        <link rel="canonical" href="./regular-html-version.html" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    EOL;
  }
?>