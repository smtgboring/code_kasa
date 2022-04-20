<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zadaci".
 *
 * @property int $id_zadatak
 * @property string $ime_zadatak
 * @property string $opis_zadatak
 * @property int|null $dodijeli_zadatak_id
 * @property int|null $projekat_id
 * @property string $Firma
 * @property string $Kontakt
 * @property string $posrednik
 * @property string|null $datum
 * @property string|null $rok
 * @property string|null $datumDPO  (datum dospjeća)
 * @property int|null $status_id    (status zadatka, u toku, urađen)
 * @property int|null $prioritet_id
 * @property int|null $tura_id
 * @property int|null $zadaci_uraditi_id
 *
 * @property Tura $tura
 */
class Zadaci extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zadaci';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ime_zadatak', 'opis_zadatak', 'Firma', 'Kontakt', 'posrednik'], 'required'],
            [['opis_zadatak'], 'string'],
            [['dodijeli_zadatak_id', 'projekat_id', 'status_id', 'prioritet_id', 'tura_id', 'zadaci_uraditi_id'], 'integer'],
            [['datum', 'rok', 'datumDPO'], 'safe'],
            [['ime_zadatak', 'Firma', 'Kontakt', 'posrednik'], 'string', 'max' => 255],
            [['tura_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tura::className(), 'targetAttribute' => ['tura_id' => 'id_tura']],
            [['zadaci_uraditi_id'], 'exist', 'skipOnError' => true, 'targetClass' => ZadaciUraditi::className(), 'targetAttribute' => ['zadaci_uraditi_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_zadatak' => 'Id Zadatak',
            'ime_zadatak' => 'Ime Zadatak',
            'opis_zadatak' => 'Opis Zadatak',
            'dodijeli_zadatak_id' => 'Dodijeli Zadatak ID',
            'projekat_id' => 'Projekat ID',
            'Firma' => 'Firma',
            'Kontakt' => 'Kontakt',
            'posrednik' => 'Posrednik',
            'datum' => 'Datum',
            'rok' => 'Rok',
            'datumDPO' => 'Datum Dpo',
            'status_id' => 'Status ID',
            'prioritet_id' => 'Prioritet ID',
            'tura_id' => 'Tura ID',
            'zadaci_uraditi_id' => 'Zadaci Uraditi',
        ];
    }

    /**
     * Gets query for [[Tura]].
     *
     * @return \yii\db\ActiveQuery|TuraQuery
     */
    public function getTura()
    {
        return $this->hasOne(Tura::className(), ['id_tura' => 'tura_id']);
    }

    /**
     * Gets query for [[ZadaciUraditi]].
     *
     * @return \yii\db\ActiveQuery|TuraQuery
     */
    public function getZadaciUraditi()
    {
        return $this->hasOne(ZadaciUraditi::className(), ['id' => 'zadaci_uraditi_id']);
    }

    /**
     * {@inheritdoc}
     * @return ZadaciQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ZadaciQuery(get_called_class());
    }
}
