<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uredaji".
 *
 * @property int $id
 * @property string $ime
 * @property string $tip_uredaja
 * @property int $serijski_broj
 * @property int $garancija
 * @property string $sifra_nasa
 * @property string $sifra_dobavljac
 * @property string|null $Slika
 */
class Uredaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uredaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ime', 'tip_uredaja', 'serijski_broj', 'garancija', 'sifra_nasa', 'sifra_dobavljac'], 'required'],
            [['serijski_broj', 'garancija'], 'integer'],
            [['ime', 'tip_uredaja', 'sifra_nasa', 'sifra_dobavljac', 'Slika'], 'string', 'max' => 255],
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
            'tip_uredaja' => 'Tip Uredaja',
            'serijski_broj' => 'Serijski Broj',
            'garancija' => 'Garancija',
            'sifra_nasa' => 'Sifra Nasa',
            'sifra_dobavljac' => 'Sifra Dobavljac',
            'Slika' => 'Slika',
        ];
    }
}
