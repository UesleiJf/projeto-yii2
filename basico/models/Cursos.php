<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cursos".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $area
 * @property int|null $turno
 */
class Cursos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Cursos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'turno'], 'integer'],
            [['nome', 'area'], 'string', 'max' => 255],
            [['id'], 'unique'],
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
            'area' => 'Area',
            'turno' => 'Turno',
        ];
    }
}
