<?php
use common\models\Post;
use yii\helpers\Url;

/* @var Post $model */

?>
<div class="sayit_blog_item_wrapper">
    <div class="sayit_blog_item_fimage">
        <a href="<?= Url::to(['article/view', 'id' => $model->id]) ?>">
            <img src="<?= Yii::$app->params['staticDomain'] . 'posts/' . $model->image ?>" alt="<?= $model->image ?>">
        </a>
    </div>

    <div class="sayit_meta">
        <div class="sayit_post_categories">
            <a href="<?= Url::to(['article/index']) ?>"><?= $model->getTypeLabel() ?></a>
        </div>

        <span>/</span>

        <div class="sayit_post_date"><?= strftime("%a %d %B %Y", $model->created_at) ?></div>
    </div>

    <h4 class="sayit_post_title">
        <a href="<?= Url::to(['article/view', 'id' => $model->id]) ?>"><?= $model->title ?></a>
    </h4>

    <div class="sayit_post_excerpt">
        <?= mb_strimwidth(strip_tags($model->content),0,255,'...') ?>
    </div>
</div>
