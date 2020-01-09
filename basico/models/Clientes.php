<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Clientes".
 *
 * @property int $id
 * @property string|null $nome
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @var UploadFile
     */
    public $fotoCliente;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'foto'], 'string', 'max' => 255],
            ['fotoCliente', 'file', 'extensions' => 'jpg, jpeg, png']
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
            'foto' => 'Foto do Cliente',
            'fotoCliente' => 'Foto do Cliente'
        ];
    }
}
