<?php
$singleData = get_query_var('singleData');
include_once __DIR__ . '/../../helpers/amp.php';
?>

<article class="border-b-4 border-violet-300">
    <div class="pt-4">
        <h1 class="font-bold text-3xl text-violet-950">
            <?= $singleData['post']->post_title; ?>
        </h1>
    </div>
    <?php
    get_template_part("views/single/categories");
    ?>
</article>

<?php if (!$isAmp): ?>
    <amp-ad width="100vw" height="320"
        type="adsense"
        data-ad-client="ca-pub-9829912735551664"
        data-ad-slot="6547051531"
        data-auto-format="rspv"
        data-full-width="">
        <div overflow=""></div>
    </amp-ad>
<?php endif ?>