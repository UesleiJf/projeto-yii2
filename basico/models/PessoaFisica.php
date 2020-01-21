<?php

namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class PessoaFisica
 * @package app\models
 *
 * @property int $pessoa_id
 * @property string $cpf
 * @property string $sexo
 *  @property Pessoas $pessoa
 */
class PessoaFisica extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Pessoa_Fisica';
    }

    public function rules()
    {
        return [
            [['pessoa_id', 'cpf', 'sexo'], 'required'],
            ['pessoa_id', 'integer'],
            ['cpf', 'string', 255],
            ['sexo', 'string', 255],
        ];
    }

    public function getPessoa()
    {
        return $this->hasOne(Pessoas::class, ['id' => 'pessoa_id']);
    }
}