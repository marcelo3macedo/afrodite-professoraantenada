<?php
include_once __DIR__ . '/../../helpers/amp.php';
include_once __DIR__ . '/../../controllers/header.php';

$headerData = get_header_data();
set_query_var('headerData', $headerData);

if (checkAmpActivate()) {
    get_template_part("views/header/formats/amp");
} else {
    get_template_part("views/header/formats/standard");
}

get_template_part("views/menu/main");
