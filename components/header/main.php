<?php
    include_once __DIR__ . '/../../helpers/amp.php';

    if (checkAmpActivate()) {
        include_once 'amp.php';
    } else {
        include_once 'standard.php';
    }    
?>