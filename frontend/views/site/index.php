<?php
setlocale(LC_ALL,'ru_RU.utf8');

/* @var $this yii\web\View */
/* @var $post \common\models\Post */

$this->title = 'Главная страница';

use yii\helpers\Url; ?>
<div class="sayit_container content_box_wide sayit_no_sidebar">
    <div class="row sayit_no_sidebar">
        <div class="col col-12 sayit_content content_box_bg_color_off">
            <div class="sayit_tiny">
                <!-- Post Slider -->
                <div class="sayit_fullwidth_block">
                    <div class="sayit_post_slider_widget">
                        <div class="sayit_widget_container">
                            <div class="sayit_post_slider_cont">
                                <div class="sayit_post_slider_wrapper" id="sayit_post_slider_123344" data-autoplay="off" data-pause="yes" data-speed="8000" data-default-height="800">
                                    <!-- Item 1 -->
                                    <div class="sayit_post_slider_item item_1" data-number="1">
                                        <div class="sayit_slider_item_wrapper sayit_js_bg_image" data-src="/img/main.jpg">
                                            <div class="sayit_overlay"></div>

                                            <div class="sayit_post_meta_cont">
                                                <div class="sayit_post_category_cont">
                                                    <a href="#">FeeWay.kz</a>
                                                </div>

                                                <h2 class="sayit_post_title"><a href="post_standard.html">Карта доступности</a></h2>

                                                <div class="sayit_post_slider_nav_buttons_cont">
                                                    <a class="sayit_prev_post_slide_button sayit_inner_post_slide_button" href="javascript:void(0)" data-slide=".item_0" data-number="0"><i class="fa fa-angle-left"></i></a>
                                                    <a class="sayit_next_post_slide_button sayit_inner_post_slide_button" href="javascript:void(0)" data-slide=".item_2" data-number="2"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 2 -->
                                    <div class="sayit_post_slider_item item_2" data-number="2">
                                        <div class="sayit_slider_item_wrapper sayit_js_bg_image" data-src="/img/clipart/post_slider/img-2.jpg">
                                            <div class="sayit_overlay"></div>

                                            <div class="sayit_post_meta_cont">
                                                <div class="sayit_post_category_cont">
                                                    <a href="#">France</a>
                                                </div>

                                                <h2 class="sayit_post_title"><a href="post_image.html">Lovely Dinner</a></h2>

                                                <div class="sayit_post_slider_nav_buttons_cont">
                                                    <a class="sayit_prev_post_slide_button sayit_inner_post_slide_button" href="javascript:void(0)" data-slide=".item_1" data-number="1"><i class="fa fa-angle-left"></i></a>
                                                    <a class="sayit_next_post_slide_button sayit_inner_post_slide_button" href="javascript:void(0)" data-slide=".item_3" data-number="3"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 3 -->
                                    <div class="sayit_post_slider_item item_3" data-number="3">
                                        <div class="sayit_slider_item_wrapper sayit_js_bg_image" data-src="/img/clipart/post_slider/img-3.jpg">
                                            <div class="sayit_overlay"></div>

                                            <div class="sayit_post_meta_cont">
                                                <div class="sayit_post_category_cont">
                                                    <a href="#">France</a>
                                                </div>

                                                <h2 class="sayit_post_title"><a href="post_video.html">About Public Transport</a></h2>

                                                <div class="sayit_post_slider_nav_buttons_cont">
                                                    <a class="sayit_prev_post_slide_button sayit_inner_post_slide_button" href="javascript:void(0)" data-slide=".item_2" data-number="2"><i class="fa fa-angle-left"></i></a>
                                                    <a class="sayit_next_post_slide_button sayit_inner_post_slide_button" href="javascript:void(0)" data-slide=".item_4" data-number="4"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slider Navigation -->
                                    <div class="sayit_post_slider_nav">
                                        <a class="sayit_post_slider_nav_button button_1" href="javascript:void(0)" data-slide=".item_1"></a>
                                        <a class="sayit_post_slider_nav_button button_2" href="javascript:void(0)" data-slide=".item_2"></a>
                                        <a class="sayit_post_slider_nav_button button_3" href="javascript:void(0)" data-slide=".item_3"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sayit_mb_90 sayit_sm_mb_60"></div>


                <!-- Content -->
                <div class="sayit_container content_box_wide sayit_no_sidebar">
                    <div class="row">
                        <div class="col col-6 push-center">
                            <div class="sayit_widget_title">
                                <div class="sayit_widget_container sayit_text_align_center sayit_mb_60">
                                    <h2 class="sayit_element_heading sayit_view_type_1">Последние новости</h2>
                                    <p class="sayit_subtitle_cont">Mauris efficitur turpis sit amet sem accumsan iaculis. Vivamus nec dolor convallis, viverra urna at, fermentum nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row sayit_no_sidebar">
                        <div class="col col-12 sayit_content content_box_bg_color_off">
                            <div class="sayit_tiny">
                                <!-- Widget Blog Listing -->
                                <div class="sayit_blog_listing_cont sayit_blog_listing_cont_3315 sayit_columns_3 sayit_blog_type_masonry_2 sayit_isotope_trigger">

                                    <?php foreach ($lastNews as $post): ?>

                                        <div class="sayit_blog_item">
                                            <div class="sayit_blog_item_wrapper">
                                                <a href="<?= Url::to(['news/view', 'id' => $post->id]) ?>">
                                                    <img src="<?= Yii::$app->params['staticDomain'] . 'posts/' . $post->image ?>" alt="post_img">
                                                    <div class="sayit_overlay"></div>
                                                    <div class="sayit_top_overlay"></div>
                                                    <div class="sayit_bottom_overlay"></div>

                                                    <div class="sayit_top_cont">
                                                        <div class="sayit_post_categories">
                                                            <span class="sayit_cat"><?= $post->getTypeLabel() ?></span>
                                                        </div>

                                                        <h6 class="sayit_post_title"><?= $post->title ?></h6>
                                                    </div>

                                                    <div class="sayit_bottom_cont">
                                                        <div class="sayit_post_date"><?= strftime("%a %d %B %Y", $post->created_at) ?></div>

                                                        <!--                <div class="sayit_post_comments">-->
                                                        <!--                    <i class="fa fa-comment-o"></i>-->
                                                        <!--                    4-->
                                                        <!--                </div>-->

                                                        <div class="clear"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>

                                </div>
                                <div class="clear"></div>

                                <div class="sayit_load_more">
                                    <a class="sayit_load_more_button" href="<?= Url::to(['news/index']) ?>">Посмотреть все</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Posts 2 -->
                <div class="row">
                    <div class="col col-6 push-center">
                        <div class="sayit_widget_title">
                            <div class="sayit_widget_container sayit_text_align_center sayit_mb_60">
                                <h2 class="sayit_element_heading sayit_view_type_1">Последние стати</h2>
                                <p class="sayit_subtitle_cont">Mauris efficitur turpis sit amet sem accumsan iaculis. Vivamus nec dolor convallis, viverra urna at, fermentum nulla.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sayit_featured_posts_widget">
                    <div class="sayit_widget_container sayit_mb_10">
                        <div class="sayit_featured_posts sayit_items_3">

                            <?php foreach ($lastPosts as $post): ?>

                            <div class="sayit_posts_item">
                                <div class="sayit_fimage_cont">
                                    <a href="<?= Url::to(['article/view', 'id' => $post->id]) ?>">
                                        <img src="<?= Yii::$app->params['staticDomain'] . 'posts/' . $post->image ?>" alt="">
                                    </a>
                                </div>

                                <div class="sayit_meta_cont">
                                    <div class="sayit_post_category">
                                        <a href="<?= Url::to(['article/index']) ?>"><?= $post->getTypeLabel() ?></a>
                                    </div>

                                    <span>/</span>

                                    <div class="sayit_post_date"><?= strftime("%a %d %B %Y", $post->created_at) ?></div>
                                </div>

                                <h4 class="sayit_post_title">
                                    <a href="<?= Url::to(['article/view', 'id' => $post->id]) ?>"><?= $post->title ?></a>
                                </h4>

                                <div class="sayit_excerpt">
                                    <?= mb_strimwidth(strip_tags($post->content),0,200,'...') ?>
                                </div>
                            </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="sayit_load_more">
                    <a class="sayit_load_more_button" href="<?= Url::to(['article/index']) ?>">Посмотреть все</a>
                </div>

                <div class="sayit_mb_120 sayit_sm_mb_0"></div>

                <!-- Socials -->
                <div class="row gutters">
                    <div class="col col-6">
                        <img src="\img\clipart\socials.jpg" alt="" class="sayit_md_mb_15">
                    </div>

                    <div class="col col-6 sayit_pl_20 sayit_md_padding_0">
                        <div class="sayit_widget_title">
                            <div class="sayit_widget_container sayit_text_align_center sayit_mb_27 sayit_mt_20">
                                <h2 class="sayit_element_heading sayit_view_type_1">Посетите наши соц. сети</h2>
                            </div>
                        </div>

                        <p class="sayit_text_align_center sayit_mb_45">Nunc laoreet nunc ac vulputate tincidunt. Cras pellentesque eros justo, sed dignissim ut. Nunc laoreet nunc ac vulputate tincidunt. Pellentesque sed ipsum congue, laoreet erat vitae. Donec efficitur ligula eu metus. Nulla et commodo velit. Mauris efficitur turpis sit amet sem accumsan iaculis. Donec efficitur ligula eu metus. Nulla et commodo velit. Mauris efficitur turpis sit amet sem accumsan iaculis. Donec efficitur ligula eu metus. </p>

                        <div class="sayit_social_icons_widget">
                            <div class="sayit_widget_container sayit_text_align_center">
                                <a class="sayit_social_icon" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a class="sayit_social_icon" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a class="sayit_social_icon" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a class="sayit_social_icon" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sayit_mb_140 sayit_sm_mb_60"></div>

            </div>
        </div>
    </div>
</div>