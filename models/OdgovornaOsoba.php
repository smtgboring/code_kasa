<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "odgovorna_osoba".
 *
 * @property int $ID_odgovorna_osoba
 * @property string $Ime
 *
 * @property Projekti[] $projektis
 */
class OdgovornaOsoba extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'odgovorna_osoba';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Ime'], 'required'],
            [['Ime'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_odgovorna_osoba' => 'Id Odgovorna Osoba',
            'Ime' => 'Ime',
        ];
    }

    /**
     * Gets query for [[Projektis]].
     *
     * @return \yii\db\ActiveQuery|ProjektiQuery
     */
    public function getProjektis()
    {
        return $this->hasMany(Projekti::className(), ['Odgovorna_Osoba_id' => 'ID_odgovorna_osoba']);
    }

    /**
     * {@inheritdoc}
     * @return OdgovornaOsobaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OdgovornaOsobaQuery(get_called_class());
    }
}
