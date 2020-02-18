<?php
/* @var \common\models\Post $model */
?>
<div class="sayit_blog_item post_item_standard" id="post-111">
    <div class="sayit_meta">
        <div class="sayit_post_date"><?= strftime("%a %d %B %Y", $model->created_at) ?></div>
    </div>

    <h2 class="sayit_post_title">
        <a href="post_standard.html"><?= $model->title ?></a>
    </h2>

    <div class="sayit_excerpt">
        <?= mb_strimwidth(strip_tags($model->content),0,385,'...') ?>
    </div>

    <a class="sayit_read_more_button" href="post_standard.html">Прочитать больше</a>
</div>