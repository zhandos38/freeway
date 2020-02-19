<?php


namespace frontend\components\widgets;


use yii\base\Widget;

class CommentWidget extends Widget
{
    public function run()
    {
        return $this->render('comment');
    }
}