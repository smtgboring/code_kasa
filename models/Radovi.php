<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "radovi".
 *
 * @property int $id
 * @property int $vrsta_rada_id
 * @property string $pocetak_rada
 * @property string $kraj_rada
 * @property int $sati
 * @property int $naplativo_sati
 * @property int $iznos_km
 * @property string $Opis
 *
 * @property Radovi[] $radovis
 * @property Radovi $vrstaRada
 */
class Radovi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'radovi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vrsta_rada_id', 'pocetak_rada', 'kraj_rada', 'sati', 'naplativo_sati', 'iznos_km', 'Opis'], 'required'],
            [['vrsta_rada_id', 'sati', 'naplativo_sati', 'iznos_km'], 'integer'],
            [['pocetak_rada', 'kraj_rada'], 'safe'],
            [['Opis'], 'string'],
            [['vrsta_rada_id'], 'exist', 'skipOnError' => true, 'targetClass' => Radovi::className(), 'targetAttribute' => ['vrsta_rada_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vrsta_rada_id' => 'Vrsta Rada ID',
            'pocetak_rada' => 'Pocetak Rada',
            'kraj_rada' => 'Kraj Rada',
            'sati' => 'Sati',
            'naplativo_sati' => 'Naplativo Sati',
            'iznos_km' => 'Iznos Km',
            'Opis' => 'Opis',
        ];
    }

    /**
     * Gets query for [[Radovis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRadovis()
    {
        return $this->hasMany(Radovi::className(), ['vrsta_rada_id' => 'id']);
    }

    /**
     * Gets query for [[VrstaRada]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVrstaRada()
    {
        return $this->hasOne(Radovi::className(), ['id' => 'vrsta_rada_id']);
    }
}
