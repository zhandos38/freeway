<?php
setlocale(LC_ALL,'ru_RU.utf8');

use kop\y2sp\ScrollPager;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

$this->title = 'Стати | ' . Yii::$app->name;
?>
<!-- Title Block -->
<div class="sayit_title_container row sayit_js_height sayit_js_bg_image sayit_block_with_fimage" data-src="/img/article.jpg" data-height="600">
    <div class="sayit_overlay sayit_fimage_overlay_type_light"></div>

    <div class="sayit_title_wrapper col push-middle">
        <h1 class="sayit_post_title">Стати</h1>
    </div>
</div>

<!-- Content -->
<div class="sayit_container content_box_wide sayit_no_sidebar">
    <div class="row sayit_no_sidebar">
        <div class="col col-12 sayit_content content_box_bg_color_off">
            <div class="sayit_tiny">
                <!-- Widget Blog Listing -->
                <div class="sayit_blog_listing_widget">
                    <div class="sayit_widget_container">

                        <?= ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView' => '_article',
                            'options' => [
                                'class' => 'sayit_blog_listing_cont sayit_blog_listing_cont_1534 sayit_columns_3 sayit_blog_type_grid'
                            ],
                            'itemOptions' => [
                                'class' => 'sayit_blog_item item',
                            ],
                            'summary' => '',
                            'layout' => '{items}',
//                            'pager' => [
//                                'class' => ScrollPager::className(),
//                                'enabledExtensions' => [
//                                    ScrollPager::EXTENSION_TRIGGER,
//                                    ScrollPager::EXTENSION_SPINNER,
//                                    ScrollPager::EXTENSION_NONE_LEFT,
//                                    ScrollPager::EXTENSION_PAGING,
//                                    ScrollPager::EXTENSION_HISTORY
//                                ],
//                                'triggerText' => 'Показать больше товаров',
//                                'triggerTemplate' => '<div class="clear"></div><div class="sayit_load_more blog_view_type_grid ias-trigger"><a class="sayit_load_more_button grid_blog_trigger" href="javascript:void(0)">{text}</a></div>',
//                            ]
                        ]) ?>

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
    </div>
</div>