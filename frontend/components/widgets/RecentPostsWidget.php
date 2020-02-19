<?php

namespace frontend\components\widgets;


use yii\base\Widget;

class RecentPostsWidget extends Widget
{
    public function run()
    {
        return $this->render('recent-posts');
    }
}