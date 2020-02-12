<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 12.02.2020
 * Time: 22:09
 */

namespace frontend\controllers;


use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}