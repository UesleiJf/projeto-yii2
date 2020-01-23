<?php

namespace app\models;


use yii\db\ActiveRecord;

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

    }

    public function getLinguagem()
    {
        
    }
}