<?php
use common\models\Post;
use frontend\components\widgets\CommentWidget;
use frontend\components\widgets\NextNewsWidget;
use frontend\components\widgets\RecentPostsWidget;
use frontend\components\widgets\SideBarWidget;

/* @var $model Post */
?>
<div class="single-post">
    <!-- Title Block -->
    <div class="sayit_title_container row sayit_js_height sayit_js_bg_image sayit_block_with_fimage" data-src="/img/state.jpg" data-height="600">
        <div class="sayit_overlay sayit_fimage_overlay_type_light"></div>

        <div class="sayit_title_wrapper col push-middle">
            <h1 class="sayit_post_title">Положения</h1>
        </div>
    </div>
    <div class="sayit_container content_box_narrow sayit_right_sidebar">
        <div class="row sayit_right_sidebar">
            <!-- Content Area -->
            <div class="col col-8 sayit_content content_box_bg_color_on">
                <div class="sayit_tiny">

                    Текст положения

                </div>
                <br><br>
                <div class="sayit_single_divider"></div>

                <?= RecentPostsWidget::widget() ?>

            </div>

            <?= SideBarWidget::widget() ?>

        </div>
    </div>
</div>