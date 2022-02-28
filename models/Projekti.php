<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projekti".
 *
 * @property int $id
 * @property string|null $Naziv_Projekta
 * @property string|null $Podnaziv
 * @property string|null $Boja
 * @property string|null $Slicica
 * @property int $Odgovorna_Osoba_id
 * @property int $Klasna_Oznaka_id
 *
 * @property OdgovornaOsoba $odgovornaOsoba
 */
class Projekti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projekti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Odgovorna_Osoba_id', 'Klasna_Oznaka_id'], 'required'],
            [['Odgovorna_Osoba_id', 'Klasna_Oznaka_id'], 'integer'],
            [['Naziv_Projekta', 'Podnaziv', 'Boja', 'Slicica'], 'string', 'max' => 255],
            [['Odgovorna_Osoba_id'], 'exist', 'skipOnError' => true, 'targetClass' => OdgovornaOsoba::className(), 'targetAttribute' => ['Odgovorna_Osoba_id' => 'ID_odgovorna_osoba']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [

            'Naziv_Projekta' => 'Naziv Projekta',
            'Podnaziv' => 'Podnaziv',
            'Boja' => 'Boja',
            'Slicica' => 'Slicica',
            'Odgovorna_Osoba_id' => 'Odgovorna Osoba ID',
            'Klasna_Oznaka_id' => 'Klasna Oznaka ID',
        ];
    }

    /**
     * Gets query for [[OdgovornaOsoba]].
     *
     * @return \yii\db\ActiveQuery|OdgovornaOsobaQuery
     */
    public function getOdgovornaOsoba()
    {
        return $this->hasOne(OdgovornaOsoba::className(), ['ID_odgovorna_osoba' => 'Odgovorna_Osoba_id']);
    }
    /**
     * Gets query for [[KlasnaOznaka]].
     *
     * @return \yii\db\ActiveQuery|KlasnaOznakaQuery
     */
    public function getKlasnaOznaka()
    {

        return $this->hasOne(KlasnaOznaka::className(), ['ID_klasna_oznaka' => 'Klasna_Oznaka_id']);
    }

    /**
     * {@inheritdoc}
     * @return ProjektiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjektiQuery(get_called_class());
    }
}
