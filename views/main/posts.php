<?php
$mainData = get_query_var('mainData');
?>

<section class="flex flex-col justify-start border-l min-h-screen bg-yellow-50 p-4 rounded-xl">
    <?php if (is_array($mainData['posts'])): ?>
        <h2 class="text-2xl font-bold py-2 text-violet-950 border-b-2 border-violet-950">
            <?= $mainData['postTitle']; ?>
        </h2>
        <div class="grid grid-cols-1 gap-8 mt-4 xl:gap-4 md:grid-cols-2 xl:grid-cols-2">
            <?php foreach ($mainData['posts'] as $post): ?>
                <a href="<?= $post->link; ?>" class="block rounded-lg p-4 shadow-sm bg-slate-50 shadow-indigo-100">
                    <img
                        alt="<?= $post->title; ?>"
                        src="<?= $post->thumbnail; ?>"
                        height="292"
                        width="384"
                        class="h-96 w-full rounded-md object-contain" />

                    <div class="mt-2">
                        <dl>
                            <div>
                                <dt class="sr-only">Título</dt>
                                <dd class="font-bold"><?= $post->title; ?></dd>
                            </div>
                        </dl>

                        <dl>
                            <div>
                                <dt class="sr-only">Description</dt>
                                <dd class="text-sm my-2"><?= $post->excerpt; ?></dd>
                            </div>
                        </dl>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <?php
        get_template_part("views/main/pagination");
        ?>
    <?php endif; ?>
</section>