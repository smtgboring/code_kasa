<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "radnici".
 *
 * @property int $id
 * @property string $ime
 */
class Radnici extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'radnici';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ime'], 'required'],
            [['ime'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ime' => 'Ime',
        ];
    }
}
