<?php

namespace app\models;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "Evento".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $data
 */
class Evento extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Evento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'data' => 'Data',
        ];
    }
}
