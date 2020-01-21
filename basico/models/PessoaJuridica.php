<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class PessoaJuridica
 * @package app\models
 *
 * @property int $pessoa_id
 * @property string $cnpj
 * @property string $ie
 * @property Pessoas $pessoa
 */
class PessoaJuridica extends ActiveRecord
{

    public static function tableName()
    {
        return 'Pessoa_Juridica';
    }

    public function rules()
    {
        return [
            [['pessoa_id', 'cnpj', 'ie'], 'required'],
            ['pessoa_id', 'integer'],
            ['cnpj', 'string', 45],
            ['ie', 'string', 45],
        ];
    }

    public function getPessoa()
    {
        return $this->hasOne(Pessoas::class, ['id' => 'pessoa_id']);
    }
}