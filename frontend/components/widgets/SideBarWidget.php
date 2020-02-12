<?php
namespace frontend\components\widgets;

class SideBarWidget extends \yii\base\Widget
{
    public function run()
    {
        return $this->render('side-bar');
    }
}