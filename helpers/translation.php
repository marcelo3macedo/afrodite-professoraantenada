<?php
    function loadLangInfo() {
        $json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
        return json_decode($json);
    }
?>