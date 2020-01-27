<?php

namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class ProgramadorLinguagem
 * @package app\models
 *
 * @property int $programador_id
 * @property int $linguagem_id
 * @property Programador $programador
 * @property Linguagem $linguagem
 */
class ProgramadorLinguagem extends ActiveRecord

{
    public static function tableName()
    {
        return 'programadores_linguagens';
    }

    public function rules(){

        return [
            [['programador_id', 'linguagem_id'], 'required'],
            [['programador_id', 'linguagem_id'], 'integer'],
            [['programador_id', 'linguagem_id'], 'unique'],
        ];
    }

    public function getProgramador()
    {
        return $this->hasOne(Programador::class, ['id' => 'programador_id']);
    }

    public function getLinguagem()
    {
        $this->hasOne(Linguagem::class, ['id' => 'linguagem_id']);
    }
}