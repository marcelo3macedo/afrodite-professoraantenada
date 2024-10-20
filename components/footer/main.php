<?php
include_once __DIR__ . '/../../helpers/content.php';
include_once __DIR__ . '/../../helpers/amp.php';
include_once __DIR__ . '/../../elements/list/simple.php';

global $lang;
$isAmp = checkAmpActivate();
?>

<footer>
    <div class="container mx-auto">
        <div class="menu">
            <?php load_simple_list($lang->footer->links) ?>
        </div>
        <div class="copyright">
            <h5 class="text-light">
                <?php getTextContent($lang->footer->title) ?>
            </h5>
        </div>
    </div>
</footer>

<?php if (!$isAmp): ?>
    <script>
        function downloadPostImage(element) {
            const image = element.closest('.image').querySelector('img').src;

            const link = document.createElement('a');
            link.href = image;
            link.target = "_blanks";

            link.download = 'downloaded-image.png';

            link.click();
        }
    </script>
<?php endif ?>

<?php
include_once 'closing.php';
?>