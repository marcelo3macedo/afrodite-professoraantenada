<section class="bg-yellow-50 p-4 rounded-xl w-full">
    <div class="category-page container mx-auto min-h-svh">
        <?php
        get_template_part("views/categories/header");
        get_template_part("views/categories/posts");
        get_template_part("views/categories/pagination");
        get_template_part("views/categories/subcategories");
        ?>
    </div>
</section>