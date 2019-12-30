<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoas".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $email
 * @property string|null $cidade
 * @property string|null $estado
 */
class Pessoas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pessoas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'cidade'], 'string', 'max' => 255],
            [['estado'], 'string', 'max' => 2],
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
            'email' => 'Email',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
        ];
    }
}
