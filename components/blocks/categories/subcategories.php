<?php
    include_once __DIR__ . '/../../../helpers/content.php';
    include_once __DIR__ . '/../../../helpers/category.php';
    
    $current_category = get_queried_object();
    $subcategories = get_cached_subcategories($current_category->term_id);
?>

<?php if (isset($subcategories) && !empty($subcategories)): ?>
    <section class="my-8">
        <div class="container px-6 mx-auto">
            <h2 class="text-2xl mb-8 font-semibold text-center capitalize text-violet-950">
                Veja mais categorias
            </h2>

            <div class="grid grid-cols-1 gap-8 mt-4 xl:gap-8 md:grid-cols-2 xl:grid-cols-2">
                <?php foreach ($subcategories as $subcategory) : ?>
                    <div class="flex flex-col items-center p-6 space-y-3 text-center bg-yellow-50 rounded-xl">
                        <a href="/category/<?php getTextContent($subcategory->slug) ?>" class="flex flex-col hover:opacity-85 hover:cursor-pointer">
                            <h2 class="text-lg py-2 font-semibold text-gray-700 capitalize">
                                <?php getTextContent($subcategory->name) ?>
                            </h2>
                            <p class="text-gray-500 text-justify text-sm">
                                <?php getTextContent($subcategory->description) ?>
                            </p>
                            <div class="flex items-center -mx-1 text-sm text-violet-500 capitalize transition-colors duration-300 transform hover:underline hover:text-blue-600">
                                <span class="mx-1">Ver conteúdos</span>
                                <svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>