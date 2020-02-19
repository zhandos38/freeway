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
<html lang="<?= Yii::$app->language ?>" class="sayit_non_transparent_header sayit_page_mode_standard sayit_fimage_position_over">
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
                <a class="sayit_image_logo sayit_retina" href="index.html"></a>
            </div>

            <div class="sayit_menu_mobile_trigger">
                <div class="sayit_trigger_container">
                    <div class="sayit_trigger_inner">

                    </div>
                </div>
            </div>
        </div>

</header>
<div class="sayit_empty_item"></div>

<?= $content ?>

<div class="sayit_footer">

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
