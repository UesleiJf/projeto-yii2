<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Linguagem
 * @package app\models
 *
 * @property int $id
 * @property string nome
 * @property ProgramadorLinguagem[] $programadorLinguagens
 * @property Programador[] $programadores
 */

class Linguagem extends ActiveRecord
{

    public static function tableName()
    {
        return 'Linguagens';
    }

    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 60]
        ];
    }

    public function getProgramadorLinguagens()
    {
        return $this->hasMany(ProgramadorLinguagem::class, ['linguagem_id' => 'id']);
    }

    public function getProgramadores()
    {
        return $this->hasMany(Programador::class, ['id' => 'programador_id'])
            ->viaTable(Programador::tableName(), ['programador_id' => 'id']);
    }

}