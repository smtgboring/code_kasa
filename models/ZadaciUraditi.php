<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zadaci_uraditi".
 *
 * @property int $id
 * @property string $ime
 * @property string $status
 *
 * @property Zadaci[] $zadacis
 */
class ZadaciUraditi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zadaci_uraditi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ime', 'status'], 'required'],
            [['id'], 'integer'],
            [['ime', 'status'], 'string', 'max' => 255],
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
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Zadacis]].
     *
     * @return \yii\db\ActiveQuery|ZadaciQuery
     */
    public function getZadacis()
    {
        return $this->hasMany(Zadaci::className(), ['zadaci_uraditi' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return ZadaciUraditiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ZadaciUraditiQuery(get_called_class());
    }
}
