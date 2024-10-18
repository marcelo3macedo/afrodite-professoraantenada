<?php
include_once __DIR__ . '/../../controllers/footer.php';

$footerData = get_footer_data();
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
            <h5 class="text-light">
                <?= $footerData['copyright'] ?>
            </h5>
        </div>
    </div>
</footer>