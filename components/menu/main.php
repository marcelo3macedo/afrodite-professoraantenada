<?php
include_once 'mobile.php';
include_once 'search.php';
include_once __DIR__ . '/../../helpers/category.php';
include_once __DIR__ . '/../../elements/gallery/categories.php';

global $lang;

$categories = get_list_categories_by_childen_with_initial(CONST_MAIN_CATEGORY);
?>

<header class="bg-violet-950">
    <nav x-data="{ isOpen: false }" class="px-6 py-4 shadow container mx-auto">
        <div class="lg:items-center lg:justify-between lg:flex container">
            <div class="flex items-center justify-between py-4 md:py-0">
                <a href="/" class="mx-auto ">
                    <img class="w-auto h-16 sm:h-20" src="<?php getImageUri('/assets/images/full_logo.png') ?>" alt="<?php getTextContent($lang->blog->name) ?>" />
                </a>

                <div class="lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>

                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white shadow-md lg:bg-transparent lg:dark:bg-transparent lg:shadow-none dark:bg-gray-900 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                <?php load_simple_list($categories) ?>
            </div>
        </div>
    </nav>
</header>