<?php /** @var array $postList */ ?>
<?php /** @var \App\Models\Post\Post $post */ ?>
<main class="main">
    <div class="container">
        <div class="posts-list">
            <?php foreach ($postList as $post) : ?>
                <div class="post">
                    <h3 class="post-title"><?= $post->title?></h3>
                    <div class="post-info">
                        <p>
                            <?= $post->publisher ?>,
                            <?= $post->author ?>
                        </p>
                    </div>

                    <img src="<?= $post->srcImg ?>"
                         alt="post-img" class="post-img">
                    <div class="content-post">
                        <p class="content-text">
                            <?= $post->content ?>
                        </p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</main>
