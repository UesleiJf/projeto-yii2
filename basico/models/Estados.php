<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "Estado".
 *
 * @property int $id
 * @property string|null $Nome
 * @property string|null $sigla
 */
class Estados extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'sigla'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nome' => 'Nome',
            'sigla' => 'Sigla',
        ];
    }
}
