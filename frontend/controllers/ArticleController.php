<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 14.02.2020
 * Time: 22:05
 */

namespace frontend\controllers;


use common\models\Post;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class ArticleController extends Controller
{
    public $layout = 'post';

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find()->andWhere(['type_id' => Post::TYPE_POST]),
            'pagination' => [
                'pageSize' => 6
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ]
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionView($id)
    {
        $model = Post::findOne(['id' => $id]);

        return $this->render('view', [
            'model' => $model
        ]);
    }
}