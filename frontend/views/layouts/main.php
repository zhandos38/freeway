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
                <a class="sayit_footer_social_button sayit_facebook" href="https://www.Instagram.com/"><i class="icon-instagram"></i></a>
                <a class="sayit_footer_social_button sayit_facebook" href="https://www.facebook.com/"><i class="icon-facebook"></i></a>
                <a class="sayit_footer_social_button sayit_twitter" href="https://twitter.com/"><i class="icon-twitter"></i></a>
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
             <li class="menu-item <?= Yii::$app->controller->id === 'site' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['site/index']) ?>">Главная</a></li>

                        <!-- News -->
                        <li class="menu-item <?= Yii::$app->controller->id === 'news' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['news/index']) ?>">Новости</a></li>

                        <!-- Articles -->
                        <li class="menu-item <?= Yii::$app->controller->id === 'article' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['article/index']) ?>">Стати</a></li>

                        <!-- Statue -->
                        <li class="menu-item <?= Yii::$app->controller->action->id === 'state' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['site/state']) ?>">Положение</a></li>

                        <!-- Contacts -->
                        <li class="menu-item <?= Yii::$app->controller->action->id === 'contact' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['site/contact']) ?>">Контакты</a></li>
        </ul>
    </div>
</header>
<div class="sayit_empty_item"></div>

<?= $content ?>

<div class="sayit_footer">
    <!-- Footer Instagram -->

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
                                <li class="menu-item <?= Yii::$app->controller->id === 'site' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['site/index']) ?>">Главная</a></li>

                        <!-- News -->
                        <li class="menu-item <?= Yii::$app->controller->id === 'news' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['news/index']) ?>">Новости</a></li>

                        <!-- Articles -->
                        <li class="menu-item <?= Yii::$app->controller->id === 'article' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['article/index']) ?>">Стати</a></li>

                        <!-- Statue -->
                        <li class="menu-item <?= Yii::$app->controller->action->id === 'state' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['site/state']) ?>">Положение</a></li>

                        <!-- Contacts -->
                        <li class="menu-item <?= Yii::$app->controller->action->id === 'contact' ? 'current-menu-ancestor' : '' ?>"><a href="<?= Url::to(['site/contact']) ?>">Контакты</a></li>
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
