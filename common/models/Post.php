<?php

namespace common\models;

use kartik\daterange\DateRangeBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\imagine\Image;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $image
 * @property int|null $views
 * @property int|null $type_id
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Post extends \yii\db\ActiveRecord
{
    public $createTimeRange;
    public $createTimeStart;
    public $createTimeEnd;
    public $imageFile;

    const TYPE_NEWS = 0;
    const TYPE_POST = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
            ],
            'daterange' => [
                'class' => DateRangeBehavior::className(),
                'attribute' => 'createTimeRange',
                'dateStartAttribute' => 'createTimeStart',
                'dateEndAttribute' => 'createTimeEnd',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['views', 'type_id', 'created_at', 'updated_at'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
            [['title', 'type_id', 'content'], 'required'],

            [['createTimeRange'], 'match', 'pattern' => '/^.+\s\-\s.+$/'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'content' => 'Контент',
            'image' => 'Рисунок',
            'views' => 'Просмотры',
            'type_id' => 'Тип',
            'created_at' => 'Время добавление',
            'updated_at' => 'Время обновление',
        ];
    }

    public static function getTypes()
    {
        return [
              self::TYPE_NEWS => 'Новости',
              self::TYPE_POST => 'Стати',
        ];
    }

    public function getTypeLabel()
    {
        return ArrayHelper::getValue(self::getTypes(), $this->type_id);
    }

    public function upload()
    {
        if ($this->imageFile == null)
            return true;

        $imgPath = \Yii::getAlias('@static') . '/posts/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;

        if ($this->validate()) {
            $this->imageFile->saveAs($imgPath);
            Image::resize($imgPath,380,380)->save();
            return true;
        } else {
            return false;
        }
    }
}
