<?php
include_once __DIR__ . '/../../controllers/footer.php';
include_once __DIR__ . '/../../helpers/amp.php';

$footerData = get_footer_data();
$isAmp = checkAmpActivate();
?>

<footer>
    <div class="container mx-auto">
        <?php if (is_array($footerData['menu'])): ?>
            <div class="menu">
                <?php foreach ($footerData['menu'] as $menu): ?>
                    <a href="<?= $menu->url ?>" class="block px-3 font-bold py-2 text-gray-100 rounded-lg hover:opacity-80">
                        <?= $menu->title; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="copyright">
            <p class="text-white">
                <?= $footerData['copyright'] ?>
            </p>
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

        document.getElementById('menu-action').addEventListener('click', function() {
            const menu = document.getElementById('menu-mobile');
            menu.classList.toggle('hidden');
        });
    </script>
<?php endif ?>

<?php wp_footer(); ?>