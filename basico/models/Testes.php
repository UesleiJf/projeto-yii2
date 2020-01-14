<?php

namespace app\models;

use app\behaviors\GenerateTesteCode;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%Testes}}".
 *
 * @property int $id
 * @property int|null $name
 * @property string|null $code
 * @property string|null $slug
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Testes extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Testes}}';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className()
            ],
            'sluggable' => [
                'class' => SluggableBehavior::className(),
                'attribute' => 'name'
            ],
            'codeGenerator' => [
                'class' => GenerateTesteCode::className()
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'code', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
