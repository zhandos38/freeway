<?php
setlocale(LC_ALL,'ru_RU.utf8');

/* @var $this yii\web\View */
/* @var $post \common\models\Post */

$this->title = 'Главная страница';

use common\models\Mark;
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
                                                    <a href="#">www.invamap.kz</a>
                                                </div>

                                                <h2 class="sayit_post_title"><a href="#">Шымкент - город без барьеров</a></h2>

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
                                                    <a href="#">iNvaMap</a>
                                                </div>

                                                <h2 class="sayit_post_title"><a href="#">Цель нашего проекта − развитие безбарьерной среды в городах.</a></h2>

                                                <div class="sayit_post_slider_nav_buttons_cont">
                                                    <a class="sayit_prev_post_slide_button sayit_inner_post_slide_button" href="javascript:void(0)" data-slide=".item_1" data-number="1"><i class="fa fa-angle-left"></i></a>
                                                    <a class="sayit_next_post_slide_button sayit_inner_post_slide_button" href="javascript:void(0)" data-slide=".item_3" data-number="3"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 3 -->
                                   
                                    <!-- Slider Navigation -->
                                    <div class="sayit_post_slider_nav">
                                        <a class="sayit_post_slider_nav_button button_1" href="javascript:void(0)" data-slide=".item_1"></a>
                                        <a class="sayit_post_slider_nav_button button_2" href="javascript:void(0)" data-slide=".item_2"></a>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <h2 class="main_title">Карта доступности</h2>
                <div class="map__wrapper">
                    <div id="map"></div>
                    <div class="map-list__wrapper">
                        <div class="map-search__wrapper">
                            <input class="map-search" type="text" placeholder="Поиск по адресу / названию">
                            <div class="map-search__btn">Пойск</div>
                        </div>
                        <ul class="map-list">
                            <?php foreach ($marks as $mark): ?>
                                <li class="map-item" data-id="<?= $mark['id'] ?>">
                                    <div class="map-item__name">
                                        <?= $mark['properties']['name'] ?>
                                    </div>
                                    <div class="map-item__address">
                                        <i class="fa fa-location-arrow"></i> <?= $mark['properties']['address'] ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="map-filter">
                        <div class="map-filter__availability">
                            <?php foreach (Mark::getAvailabilitiesLabel() as $key => $item): ?>
                            <label class="map-filter__radio-label">
                                <input class="filter-availability" type="checkbox" name="availability" value="<?= $key ?>" checked>
                                <?= $item ?>
                            </label>
                            <?php endforeach; ?>
                        </div>
                        <div class="map-filter__type">
                            <?php foreach (Mark::getTypesLabel() as $key => $item): ?>
                            <div class="map-filter__item">
                                <label for="<?= $key . $item ?>" class="map-filter__label">
                                    <input id="<?= $key . $item ?>" class="filter-type" type="checkbox" value="<?= $key ?>" checked>
                                    <?= $item ?>
                                </label>
                            </div>
                            <?php endforeach; ?>
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
                        <img src="\img\clipart\about.jpg" alt="" class="sayit_md_mb_15">
                    </div>

                    <div class="col col-6 sayit_pl_20 sayit_md_padding_0">
                        <div class="sayit_widget_title">
                            <div class="sayit_widget_container sayit_text_align_center sayit_mb_27 sayit_mt_20">
                                <h2 class="sayit_element_heading sayit_view_type_1">О нас</h2>
                            </div>
                        </div>

                        <p class="sayit_text_align_center sayit_mb_45">Архитектура большинство  зданий неприветлива к людям с инвалидностью, мамам с колясками, пожилым людям, велосипедистам. В нашей стране таких людей более 2,5 млн., и, чтобы обеспечить свободу перемещения для них, необходимы пандусы, широкие проходы, плавные съезды с тротуаров и т.д. 
<h2 class="sayit_element_heading sayit_view_type_1">Цель нашего проекта − развитие безбарьерной среды в городах.</h2>
<b>В рамках проекта планируется:</b><br>
 1) Создать онлайн-карты городов  и карты для авто-навигаторов, на которых будут отмечены общественные и коммерческие организации с учетом их «доступности». 
<br>
 2) Популяризовать идею безбарьерной среды. Повысить престижность «доступности» и тем самым побудить организации адаптировать свои помещения для людей с ограниченной подвижностью.
 Разработать информационный портал invamap.kz, посвященный вопросам безбарьерной среды.
<br><br>
                         </p>
                        <br>
                        <div class="sayit_social_icons_widget">
                            <div class="sayit_widget_container sayit_text_align_center">
                                <a class="sayit_social_icon" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a class="sayit_social_icon" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a class="sayit_social_icon" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sayit_mb_140 sayit_sm_mb_60"></div>

            </div>
        </div>
    </div>
</div>
<?php
$marks = \yii\helpers\Json::encode($marks);
$js =<<<JS
ymaps.ready(init);

function init () {
    let marks = $marks;
    let geolocation = ymaps.geolocation,
    myMap = new ymaps.Map("map", {
            center: [42.330186, 69.592237],
            zoom: 13,
            controls: []
        }, {
            searchControlProvider: 'yandex#search'
        }),
        objectManager = new ymaps.ObjectManager({
            // Чтобы метки начали кластеризоваться, выставляем опцию.
            clusterize: true,
            // ObjectManager принимает те же опции, что и кластеризатор.
            gridSize: 32,
            clusterIconLayout: "default#pieChart"
        });
    
    let hospitals = {
        "type": "FeatureCollection",
        "features": marks
    };
    objectManager.add(marks);
    objectManager.events.add('click', function(e) {
        console.log('Привет яндекс ' + e.get('objectId'));
    });
    
    /* Добавления objectManager на карту */
    myMap.geoObjects.add(objectManager);
    
    checkTypes();
    // checkAvailability();
    
    /* Проверка фильтров */
    $('.filter-type').on('change', function(event) {
        checkTypes();
    });
    
    function checkTypes() {
        let filterQuery = '';
        let checkboxesLength = $('.filter-checkbox:checked').length;
        $('.filter-checkbox:checked').each(function(index) {
            let item = $(this);
            filterQuery += 'properties.type == "' + item.val() + '"';
            if (index !== checkboxesLength - 1)
                filterQuery += ' || ';
        });
        objectManager.setFilter(filterQuery);
        console.log(filterQuery);
    }
    
    /* Проверка фильтров */
    $('.filter-availability').on('change', function(event) {
        checkAvailability();
    });
    
    function checkAvailability() {
        let filterQuery = '';
        let checkboxesLength = $('.filter-availability:checked').length;
        $('.filter-availability:checked').each(function(index) {
            let item = $(this);
            filterQuery += 'properties.availability == "' + item.val() + '"';
            if (index !== checkboxesLength - 1)
                filterQuery += ' || ';
        });
        objectManager.setFilter(filterQuery);
        console.log(filterQuery);
    }
    
    $(document).on('click', '.map-item', function() {
        let objectId = $(this).data('id');
        // let coordinates = objectManager.objects.getById(id).geometry.coordinates;
        let geoObject = objectManager.objects.getById(objectId);
        myMap.setCenter(geoObject.geometry.coordinates, 17, {duration: 300})
        .then(function () {
          objectManager.objects.balloon.open(objectId);
        });
        // $(this).siblings().removeClass('map-pharmacy__active');
        // $(this).addClass('map-pharmacy__active');
        // myMap.setCenter(coordinates, 17, {duration: 300});
        // console.log('Bulding coords: ' + coordinates);
    });
    
        // Сравним положение, вычисленное по ip пользователя и
        // положение, вычисленное средствами браузера.
        geolocation.get({
            provider: 'auto',
            mapStateAutoApply: true
        }).then(function (result) {
            // Красным цветом пометим положение, вычисленное через ip.
            result.geoObjects.options.set('preset', 'islands#redCircleIcon');
            result.geoObjects.get(0).properties.set({
                balloonContentBody: 'Мое местоположение<br>',
            });
            myMap.geoObjects.add(result.geoObjects);

            // let coords = result.geoObjects.get(0).geometry.getCoordinates();
            // let userCoords = coords;
        });
}
JS;

$this->registerJs($js);
?>