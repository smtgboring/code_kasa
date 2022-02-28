<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tura".
 *
 * @property int $id_tura
 * @property string $ime_tura
 *
 * @property Zadaci[] $zadacis
 */
class Tura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ime_tura'], 'required'],
            [['ime_tura'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tura' => 'Id Tura',
            'ime_tura' => 'Ime Tura',
        ];
    }

    /**
     * Gets query for [[Zadacis]].
     *
     * @return \yii\db\ActiveQuery|ZadaciQuery
     */
    public function getZadacis()
    {
        return $this->hasMany(Zadaci::className(), ['tura_id' => 'id_tura']);
    }

    /**
     * {@inheritdoc}
     * @return TuraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TuraQuery(get_called_class());
    }
}
