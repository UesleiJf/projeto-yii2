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
            [['cabeca', 'corpo'], 'string'],
            [['status'], 'integer'],
            [['titulo'], 'string', 'max' => 255],
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

    public function fields()
    {
        return [
            'id',
            'title' => 'titulo',
            'status' => function(Noticias $model){
                return ($model->status == '1' ? 'Ativo': 'Inativo');
            }
        ];
    }
}
