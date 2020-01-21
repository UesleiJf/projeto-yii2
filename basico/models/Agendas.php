<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "Agendas".
 *
 * @property int $id
 * @property string|null $local
 * @property string|null $data
 * @property string|null $horario
 * @property string|null $valor
 * @property string|null $observacao
 */
class Agendas extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Agendas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data', 'horario'], 'safe'],
            [['observacao'], 'string'],
            [['local', 'valor'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'local' => 'Local',
            'data' => 'Data',
            'horario' => 'Horario',
            'valor' => 'Valor',
            'observacao' => 'Observacao',
        ];
    }


}
