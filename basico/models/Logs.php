<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Logs}}".
 *
 * @property int $id
 * @property string|null $created
 * @property string|null $updated
 * @property string|null $user
 * @property string|null $table
 */
class Logs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Logs}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created', 'updated'], 'safe'],
            [['user', 'table'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created' => 'Created',
            'updated' => 'Updated',
            'user' => 'User',
            'table' => 'Table',
        ];
    }
}
