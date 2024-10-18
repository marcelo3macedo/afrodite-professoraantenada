<?php
$singleData = get_query_var('singleData');
?>

<article class="my-8">
    <?php if (is_array($singleData['related'])): ?>
        <h2 class="font-bold text-xl text-center">Você também pode gostar de:</h2>
        <div class="grid grid-cols-1 gap-8 mt-8 xl:gap-4 md:grid-cols-3 xl:grid-cols-3">
            <?php foreach ($singleData['related'] as $post): ?>
                <a href="<?= $post->link; ?>" class="block rounded-lg p-4 shadow-sm bg-slate-50 shadow-indigo-100">
                    <img
                        alt="<?= $post->title; ?>"
                        src="<?= $post->thumbnail; ?>"
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
    <?php endif; ?>
</article>