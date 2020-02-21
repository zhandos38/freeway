<?php
setlocale(LC_ALL,'ru_RU.utf8');

use frontend\components\widgets\SideBarWidget;
use yii\widgets\LinkPager;

$this->title = 'Новости | ' . Yii::$app->name;
?>
<!-- Title Block -->
<div class="sayit_title_container row sayit_js_height sayit_js_bg_image sayit_block_with_fimage" data-src="/img/gazety-makro-fon.jpg" data-height="600">
    <div class="sayit_overlay sayit_fimage_overlay_type_light"></div>

    <div class="sayit_title_wrapper col push-middle">
        <h1 class="sayit_post_title">Новости</h1>
    </div>
</div>

<!-- Content -->
<div class="sayit_container content_box_narrow sayit_right_sidebar">
    <div class="row sayit_right_sidebar">
        <!-- Content Area -->
        <div class="col col-8 sayit_content content_box_bg_color_off">
            <div class="sayit_tiny">
                <!-- Widget Blog Listing -->
                <div class="sayit_blog_listing_widget">
                    <div class="sayit_widget_container">
                        <div class="sayit_standard_blog_listing_cont">

                            <?= \yii\widgets\ListView::widget([
                                'dataProvider' => $dataProvider,
                                'itemView' => '_news',
                                'layout' => '{items}'
                            ]) ?>

                        </div>

                        <div class="news-pagination__wrapper">
                            <?=
                            LinkPager::widget([
                                'pagination' => $dataProvider->getPagination(),
                                'maxButtonCount' => 3,
                                'activePageCssClass' => 'current',
                                'options' => [
                                    'class' => 'news-pagination'
                                ],
                                'linkContainerOptions' => [
                                    'class' => 'news-pagination__item page-numbers'
                                ],
                                'nextPageLabel' => '<i class="fa fa-arrow-right"></i>',
                                'prevPageLabel' => '<i class="fa fa-arrow-left"></i>',
                            ]);
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?= SideBarWidget::widget() ?>

        </div>
    </div>
</div>