<?php
setlocale(LC_ALL,'ru_RU.utf8');

use common\models\Post;
use frontend\components\widgets\CommentWidget;
use frontend\components\widgets\NextNewsWidget;
use frontend\components\widgets\RecentPostsWidget;
use frontend\components\widgets\SideBarWidget;
use yii\helpers\Url;

/* @var $model Post */
?>
<div class="single-post">
    <!-- Title Block -->
    <div class="sayit_title_container row sayit_js_height sayit_js_bg_image sayit_block_with_fimage" data-src="<?= Yii::$app->params['staticDomain'] . 'posts/' . $model->image ?>" data-height="600">
        <div class="sayit_overlay sayit_fimage_overlay_type_light"></div>

        <div class="sayit_title_wrapper col push-middle">
            <div class="sayit_post_category_cont">
                <a href="<?= Url::to(['news/index']) ?>"><?= $model->getTypeLabel() ?></a>
                /
                <span class="sayit_post_date"><?= strftime("%a %d %B %Y", $model->created_at) ?></span>
            </div>

            <h1 class="sayit_post_title"><?= $model->title ?></h1>
        </div>
    </div>
    <div class="sayit_container content_box_narrow sayit_right_sidebar">
        <div class="row sayit_right_sidebar">
            <!-- Content Area -->
            <div class="col col-8 sayit_content content_box_bg_color_on">
                <div class="sayit_tiny">

                    <?= $model->content ?>

                </div>
                <br><br>
                <div class="sayit_single_divider"></div>

                <?= NextNewsWidget::widget() ?>

                <?= RecentPostsWidget::widget() ?>

                <?= CommentWidget::widget() ?>

            </div>

            <?= SideBarWidget::widget() ?>

        </div>
    </div>
</div>