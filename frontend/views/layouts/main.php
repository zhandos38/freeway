<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="sayit_transparent_header sayit_sticky_menu_on sayit_page_mode_standard">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="sayit_js_bg_color" data-bgcolor="#ffffff">
<?php $this->beginBody() ?>

<!-- Header -->
<header>
    <div class="row align-middle sayit_logo_left">
        <div class="col sayit_logo_container col-2">
            <div class="sayit_logo_cont">
                <a class="sayit_image_logo sayit_retina" href="<?= Url::to(['site/index']) ?>"></a>
            </div>

            <div class="sayit_menu_mobile_trigger">
                <div class="sayit_trigger_container">
                    <div class="sayit_trigger_inner">

                    </div>
                </div>
            </div>
        </div>

        <div class="col sayit_menu_container col-8">
            <div class="sayit_menu_cont">

                <div class="sayit_menu_inner">
                    <ul class="sayit_menu sayit_header_menu">
                        <!-- Main -->
                        <li class="menu-item <?= Yii::$app->controller->id === 'site' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['site/index']) ?>">Главная</a></li>

                        <!-- News -->
                        <li class="menu-item <?= Yii::$app->controller->id === 'news' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['news/index']) ?>">Новости</a></li>

                        <!-- Articles -->
                        <li class="menu-item <?= Yii::$app->controller->id === 'article' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['article/index']) ?>">Стати</a></li>

                        <!-- Map -->
                        <li class="menu-item <?= Yii::$app->controller->action->id === 'map' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['site/map']) ?>">Карта</a></li>

                        <!-- Statue -->
                        <li class="menu-item <?= Yii::$app->controller->action->id === 'state' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['site/state']) ?>">Положение</a></li>

                        <!-- Contacts -->
                        <li class="menu-item <?= Yii::$app->controller->action->id === 'contact' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['site/contact']) ?>">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col sayit_header_socials_and_search_container col-2 sayit_text_align_right">
            <div class="sayit_header_socials">
                <a class="sayit_footer_social_button sayit_facebook" href="https://www.facebook.com/"><i class="icon-facebook"></i></a>
                <a class="sayit_footer_social_button sayit_twitter" href="https://twitter.com/"><i class="icon-twitter"></i></a>
                <a class="sayit_footer_social_button sayit_linkedin" href="https://www.linkedin.com/"><i class="icon-linkedin"></i></a>
            </div>

            <div class="sayit_header_search_container">
                <a class="sayit_header_search_button" href="javascript:void(0)"><i class="icon-search"></i></a>

                <div class="sayit_header_search_popup">
                    <div class="sayit_header_search_content_cont">
                        <form name="header_search_form" id="header_search_form" class="sayit_search_form" method="get">
                            <span class="sayit_icon_search"><i class="fa fa-search"></i></span>
                            <input type="text" name="s" placeholder="Search" title="Search the site..." class="sayit_field_search" form="header_search_form">
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sayit_menu_mobile">
        <ul class="sayit_menu">
            <!-- Main -->
            <li class="menu-item"><a href="index.html">Главная</a></li>

            <!-- Blog -->
            <li class="menu-item-has-children menu-item">
                <a href="javascript:void(0)">Blog</a>

                <ul class="sub-menu">
                    <li class="menu-item"><a href="blog_classic.html">Blog Classic</a></li>
                    <li class="menu-item"><a href="blog_modern.html">Blog Modern</a></li>
                    <li class="menu-item"><a href="blog_grid.html">Blog Grid</a></li>
                    <li class="menu-item"><a href="blog_masonry.html">Blog Masonry</a></li>
                    <li class="menu-item"><a href="blog_masonry_2.html">Blog Masonry Type 2</a></li>
                    <li class="menu-item"><a href="blog_packery.html">Blog Packery</a></li>
                    <li class="menu-item-has-children menu-item">
                        <a href="javascript:void(0)">Single Posts</a>

                        <ul class="sub-menu">
                            <li class="menu-item"><a href="post_standard.html">Standard Post</a></li>
                            <li class="menu-item"><a href="post_image.html">Image Post</a></li>
                            <li class="menu-item"><a href="post_video.html">Video Post</a></li>
                            <li class="menu-item"><a href="post_audio.html">Audio Post</a></li>
                            <li class="menu-item"><a href="post_quote.html">Quote Post</a></li>
                            <li class="menu-item"><a href="post_link.html">Link Post</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- Places -->
            <li class="menu-item-has-children menu-item">
                <a href="javascript:void(0)">Places</a>

                <ul class="sub-menu">
                    <li class="menu-item"><a href="places_usa.html">USA</a></li>
                    <li class="menu-item"><a href="places_india.html">India</a></li>
                    <li class="menu-item"><a href="places_germany.html">Germany</a></li>
                    <li class="menu-item"><a href="places_turkey.html">Turkey</a></li>
                    <li class="menu-item"><a href="places_italy.html">Italy</a></li>
                    <li class="menu-item"><a href="places_uk.html">United Kingdom</a></li>
                    <li class="menu-item"><a href="places_france.html">France</a></li>
                </ul>
            </li>

            <!-- Pages -->
            <li class="menu-item-has-children menu-item">
                <a href="javascript:void(0)">Pages</a>

                <ul class="sub-menu">
                    <li class="menu-item"><a href="typography.html">Typography</a></li>
                    <li class="menu-item"><a href="coming_soon.html">Coming Soon</a></li>
                </ul>
            </li>

            <!-- Contacts -->
            <li class="menu-item"><a href="contacts.html">Contacts</a></li>
        </ul>
    </div>
</header>
<div class="sayit_empty_item"></div>

<?= $content ?>

<div class="sayit_footer">
    <!-- Footer Instagram -->
    <div class="sayit_photostream">
        <div class="instagallery">
            <!-- Item 1 -->
            <div class="ig-item">
                <a href="javascript:void(0)">
                    <img src="\img\clipart\instagram\img-1.jpg" alt="">

                    <span class="ig-likes-comments">
                        <span>
                            <i class="fa fa-heart"></i>
                            2
                        </span>

                        <span>
                            <i class="fa fa-comment"></i>
                            0
                        </span>
                    </span>
                </a>
            </div>

            <!-- Item 2 -->
            <div class="ig-item">
                <a href="javascript:void(0)">
                    <img src="\img\clipart\instagram\img-2.jpg" alt="">

                    <span class="ig-likes-comments">
                        <span>
                            <i class="fa fa-heart"></i>
                            2
                        </span>

                        <span>
                            <i class="fa fa-comment"></i>
                            1
                        </span>
                    </span>
                </a>
            </div>

            <!-- Item 3 -->
            <div class="ig-item">
                <a href="javascript:void(0)">
                    <img src="\img\clipart\instagram\img-3.jpg" alt="">

                    <span class="ig-likes-comments">
                        <span>
                            <i class="fa fa-heart"></i>
                            2
                        </span>

                        <span>
                            <i class="fa fa-comment"></i>
                            1
                        </span>
                    </span>
                </a>
            </div>

            <!-- Item 4 -->
            <div class="ig-item">
                <a href="javascript:void(0)">
                    <img src="\img\clipart\instagram\img-4.jpg" alt="">

                    <span class="ig-likes-comments">
                        <span>
                            <i class="fa fa-heart"></i>
                            2
                        </span>

                        <span>
                            <i class="fa fa-comment"></i>
                            1
                        </span>
                    </span>
                </a>
            </div>

            <!-- Item 5 -->
            <div class="ig-item">
                <a href="javascript:void(0)">
                    <img src="\img\clipart\instagram\img-5.jpg" alt="">

                    <span class="ig-likes-comments">
                        <span>
                            <i class="fa fa-heart"></i>
                            1
                        </span>

                        <span>
                            <i class="fa fa-comment"></i>
                            0
                        </span>
                    </span>
                </a>
            </div>

            <!-- Item 6 -->
            <div class="ig-item">
                <a href="javascript:void(0)">
                    <img src="\img\clipart\instagram\img-6.jpg" alt="">

                    <span class="ig-likes-comments">
                        <span>
                            <i class="fa fa-heart"></i>
                            1
                        </span>

                        <span>
                            <i class="fa fa-comment"></i>
                            1
                        </span>
                    </span>
                </a>
            </div>

            <!-- Item 7 -->
            <div class="ig-item">
                <a href="javascript:void(0)">
                    <img src="\img\clipart\instagram\img-7.jpg" alt="">

                    <span class="ig-likes-comments">
                        <span>
                            <i class="fa fa-heart"></i>
                            1
                        </span>

                        <span>
                            <i class="fa fa-comment"></i>
                            1
                        </span>
                    </span>
                </a>
            </div>

            <!-- Item 8 -->
            <div class="ig-item">
                <a href="javascript:void(0)">
                    <img src="\img\clipart\instagram\img-8.jpg" alt="">

                    <span class="ig-likes-comments">
                        <span>
                            <i class="fa fa-heart"></i>
                            1
                        </span>

                        <span>
                            <i class="fa fa-comment"></i>
                            0
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>

    <!-- Back To Top -->
    <a class="sayit_back_to_top" href="javascript:void(0)">Top</a>

    <footer class="sayit_footer_type_simple">
        <div class="row">
            <div class="col col-12">
                <div class="row align-middle">
                    <div class="col col-2 sayit_footer_logo_container">
                        <a class="sayit_image_logo sayit_retina" href="index.html"></a>
                    </div>

                    <div class="col col-10 sayit_footer_menu_container">
                        <div class="menu-footer-menu-container">
                            <ul class="sayit_footer_menu">
                                <li class="menu-item"><a href="about.html">About</a></li>
                                <li class="menu-item"><a href="blog_modern.html">Blog</a></li>
                                <li class="menu-item"><a href="typography.html">Typography</a></li>
                                <li class="menu-item"><a href="contacts.html">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
