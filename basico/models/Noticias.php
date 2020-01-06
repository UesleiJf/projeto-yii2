<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Noticias".
 *
 * @property int $id
 * @property string|null $titulo
 * @property string|null $cabeca
 * @property string|null $corpo
 * @property int|null $status
 */
class Noticias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'status'], 'integer'],
            [['cabeca', 'corpo'], 'string'],
            [['titulo'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'cabeca' => 'Cabeca',
            'corpo' => 'Corpo',
            'status' => 'Status',
        ];
    }
}
