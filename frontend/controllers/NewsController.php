<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 12.02.2020
 * Time: 22:09
 */

namespace frontend\controllers;


use common\models\Post;
use yii\web\Controller;

class NewsController extends Controller
{
    public $layout = 'post';

    public function actionIndex()
    {
        $news = Post::findAll(['type_id' => Post::TYPE_NEWS]);
        return $this->render('index', [
            'news' => $news
        ]);
    }

    public function actionView($id)
    {
        $model = Post::findOne(['id' => $id]);

        return $this->render('view', [
            'model' => $model
        ]);
    }
}