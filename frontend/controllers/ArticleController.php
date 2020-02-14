<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 14.02.2020
 * Time: 22:05
 */

namespace frontend\controllers;


use common\models\Post;
use yii\web\Controller;

class ArticleController extends Controller
{
    public $layout = 'post';

    public function actionIndex()
    {
        $news = Post::findAll(['type_id' => Post::TYPE_POST]);
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