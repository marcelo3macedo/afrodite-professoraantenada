<?php
$headerData = get_query_var('headerData');
?>

<header class="bg-violet-950">
    <nav class="px-6 py-4 shadow container mx-auto">
        <div class="lg:items-center lg:justify-between lg:flex container">
            <div class="flex items-center justify-between py-4 md:py-0">
                <a href="/" class="mx-auto ">
                    <img
                        class="w-auto h-16 sm:h-20"
                        src="<?= $headerData['logoUrl']; ?>"
                        alt="<?= $headerData['seo']['name']; ?>" />
                </a>
                <?php
                get_template_part("views/menu/action");
                ?>
            </div>
            <?php
            get_template_part("views/menu/categories");
            ?>
            <?php
            get_template_part("views/menu/search");
            ?>
        </div>
    </nav>
</header>