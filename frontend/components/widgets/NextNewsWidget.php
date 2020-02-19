<?php


namespace frontend\components\widgets;


use yii\base\Widget;

class NextNewsWidget extends Widget
{
    public function run()
    {
        return $this->render('next-news');
    }
}