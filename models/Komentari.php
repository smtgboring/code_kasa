<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "komentari".
 *
 * @property int $id
 * @property string $komentar
 * @property int $odgovorna_osoba_komentar_id
 *
 * @property OdgovornaOsoba $odgovornaOsobaKomentar
 */
class Komentari extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'komentari';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['komentar', 'odgovorna_osoba_komentar_id'], 'required'],
            [['komentar'], 'string'],
            [['odgovorna_osoba_komentar_id'], 'integer'],
            [['odgovorna_osoba_komentar_id'], 'exist', 'skipOnError' => true, 'targetClass' => OdgovornaOsoba::className(), 'targetAttribute' => ['odgovorna_osoba_komentar_id' => 'ID_odgovorna_osoba']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'komentar' => 'Komentar',
            'odgovorna_osoba_komentar_id' => 'Odgovorna Osoba Komentar ID',
        ];
    }

    /**
     * Gets query for [[OdgovornaOsobaKomentar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOdgovornaOsobaKomentar()
    {
        return $this->hasOne(OdgovornaOsoba::className(), ['ID_odgovorna_osoba' => 'odgovorna_osoba_komentar_id']);
    }
}
