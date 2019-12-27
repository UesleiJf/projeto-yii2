<?php

namespace app\models;


use yii\base\Model;

class CadastroModel extends Model
{
    public $nome;
    public $email;
    public $idade;

    /***
     * @return array Regras com validações dos campos
     */
    public function rules()
    {
        return [
            [['nome','email', 'idade'], 'required'],
            ['email', 'email'],
            ['idade', 'number', 'integerOnly'=>true]
        ];
    }

    public function attributesLabels()
    {
        return [
            'nome' => 'Nome Completo',
            'email' => 'E-mail',
            'idade' => 'Idade'
        ];
    }
}