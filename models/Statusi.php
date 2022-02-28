<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "statusi".
 *
 * @property int $id_status
 * @property string $ime_status
 */
class Statusi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statusi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ime_status'], 'required'],
            [['ime_status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_status' => 'Id Status',
            'ime_status' => 'Ime Status',
        ];
    }

    /**
     * {@inheritdoc}
     * @return StatusiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StatusiQuery(get_called_class());
    }
}
