<?php

namespace app\models;

use yii\base\Model;

class CadastroForm extends Model
{
    public $nome;
    public $email;
    public $idade;
    public $site;
    public $dataNascimento;
    public $dataInicial;
    public $dataFinal;

    public function rules()
    {
        return [
            ['nome', 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'nome' => 'Nome',
            'email' => 'Email',
            'idade' => 'Idade',
            'site' => 'Site/Home Page',
            'dataNascimento' => 'Data Nascimento',
            'dataInicial' => 'Data Inicial',
            'dataFinal' => 'Data Final',
        ];
    }
}