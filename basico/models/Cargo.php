<?php

namespace app\models;


use yii\db\ActiveRecord;


/**
 * Class Cargo
 * @package app\models
 * @property int $id
 * @property string $nome
 * @property Funcionario[] $funcionarios
 */
class Cargo extends ActiveRecord
{
    public static function tableName()
    {
        return 'Cargos';
    }

    public function rules()
    {
        return [
            ['nome', 'required'],
            ['nome', 'string', 'max' => 255]
        ];
    }

    public function getFuncionarios()
    {
        // equivalente ao INNER JOIN
        return $this->hasMany(Funcionario::class, ['cargo_id' => 'id']);
    }
}

