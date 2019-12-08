<?php

use frontend\assets\MapAsset;

MapAsset::register($this);



/* @var $this \yii\web\View*/

$this->title = 'Карта';
$this->params['breadcrumbs'][] = $this->title;
?>
<h2><?= $this->title ?></h2>
<div class="map__wrapper">
    <div id="map"></div>
    <div class="map-list__wrapper">
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
        <div class="map-filter__type">
            <input class="filter-checkbox" type="checkbox" value="Больница" checked>Больница
            <input class="filter-checkbox" type="checkbox" value="Ресторан" checked>Ресторан
            <input class="filter-checkbox" type="checkbox" value="Аптека" checked>Аптека
            <input class="filter-checkbox" type="checkbox" value="Кафе" checked>Кафе
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
            center: [51.198222, 71.416985],
            zoom: 13
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
    
    /* Проверка фильтров */
    $('.filter-checkbox').on('change', function(event) {
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
    });
    
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
