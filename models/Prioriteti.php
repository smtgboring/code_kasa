<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prioriteti".
 *
 * @property int $id_prioritet
 * @property string $ime_prioritet
 */
class Prioriteti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prioriteti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ime_prioritet'], 'required'],
            [['ime_prioritet'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prioritet' => 'Id Prioritet',
            'ime_prioritet' => 'Ime Prioritet',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PrioritetiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PrioritetiQuery(get_called_class());
    }
}
