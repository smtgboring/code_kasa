<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "radnici".
 *
 * @property int $id
 * @property string $ime
 * @property int $projekti_id
 * @property int $zadaci_id
 *
 * @property Projekti $projekti
 * @property Zadaci $zadaci
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
            [['ime', 'projekti_id', 'zadaci_id'], 'required'],
            [['projekti_id', 'zadaci_id'], 'integer'],
            [['ime'], 'string', 'max' => 255],
            [['projekti_id'], 'exist', 'skipOnError' => true, 'targetClass' => Projekti::className(), 'targetAttribute' => ['projekti_id' => 'id']],
            [['zadaci_id'], 'exist', 'skipOnError' => true, 'targetClass' => Zadaci::className(), 'targetAttribute' => ['zadaci_id' => 'id_zadatak']],
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
            'projekti_id' => 'Projekti ID',
            'zadaci_id' => 'Zadaci ID',
        ];
    }

    /**
     * Gets query for [[Projekti]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjekti()
    {
        return $this->hasOne(Projekti::className(), ['id' => 'projekti_id']);
    }

    /**
     * Gets query for [[Zadaci]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZadaci()
    {
        return $this->hasOne(Zadaci::className(), ['id_zadatak' => 'zadaci_id']);
    }
}
