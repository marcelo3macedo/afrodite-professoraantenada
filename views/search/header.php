<?php
$searchData = get_query_var('searchData');
?>

<div class="my-8 text-center px-2 md:px-0">
    <h2 class="text-2xl md:text-3xl font-bold text-violet-950 border-b-4 pb-4 border-violet-950">
        Você buscou por: <?= $searchData['query'] ?>
    </h2>
</div>