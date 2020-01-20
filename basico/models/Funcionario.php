<?php

namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class Funcionario
 * @package app\models
 *
 * @property int $id
 * @property int $cargo_id
 * @property string $nome
 * @property Cargo $cargo
 */
class Funcionario extends ActiveRecord
{
    public static function tableName()
    {
        return 'Funcionarios';
    }

    public function rules()
    {
        return [
            [['nome', 'cargo_id'], 'required'],
            [['cargo_id'], 'integer'],
            ['nome', 'string', 'max' => 60]
        ];
    }

    public function getCargo()
    {
        return $this->hasOne(Cargo::class, ['id' => 'cargo_id']);
    }
}