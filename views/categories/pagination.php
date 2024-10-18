<?php
$categoryData = get_query_var('categoryData');
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
?>

<?php if (count($categoryData['posts']) > 0): ?>
    <div class="flex items-center justify-center w-full my-8">
        <a href="?page=<?php echo max(1, $page - 1); ?>" class="flex items-center px-4 py-2 mx-1 text-gray-500 bg-white rounded-md <?php echo ($page <= 1) ? 'cursor-not-allowed' : 'hover:bg-violet-950 hover:text-white'; ?> ">
            Anterior
        </a>

        <?php if (count($categoryData['posts']) == CONST_NUMBER_LATEST_POSTS): ?>
            <a href="?page=<?php echo $page + 1; ?>"
                class="flex items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md hover:bg-violet-950 hover:text-white">
                Próximo
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>