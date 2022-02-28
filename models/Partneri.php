<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partneri".
 *
 * @property int $id_partneri
 * @property string $Ime
 * @property int|null $Tel
 * @property int|null $Fax
 * @property int|null $Mob
 * @property string|null $Email
 * @property string $Vrsta
 * @property string $Napravio
 * @property string $CreatedAt
 * @property string|null $Web
 * @property string|null $Adresa
 * @property string|null $Adresa2
 * @property string|null $Grad
 * @property string|null $Drzava
 * @property int $pos_br
 * @property string $JIB
 * @property string|null $PDV
 * @property string|null $Datum_rodjenja
 * @property string|null $Broj_LK
 * @property string|null $Mjesto_izdavanja_lk
 */
class Partneri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partneri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_partneri', 'Ime', 'Napravio', 'pos_br', 'JIB'], 'required'],
            [['id_partneri', 'Tel', 'Fax', 'Mob', 'pos_br'], 'integer'],
            [['CreatedAt', 'Datum_rodjenja'], 'safe'],
            [['Ime', 'Email', 'Vrsta', 'Napravio', 'Web', 'Adresa', 'Adresa2', 'Grad', 'Drzava', 'JIB', 'PDV', 'Broj_LK', 'Mjesto_izdavanja_lk'], 'string', 'max' => 255],
            [['id_partneri'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_partneri' => 'Id Partneri',
            'Ime' => 'Ime',
            'Tel' => 'Tel',
            'Fax' => 'Fax',
            'Mob' => 'Mob',
            'Email' => 'Email',
            'Vrsta' => 'Vrsta',
            'Napravio' => 'Napravio',
            'CreatedAt' => 'Created At',
            'Web' => 'Web',
            'Adresa' => 'Adresa',
            'Adresa2' => 'Adresa2',
            'Grad' => 'Grad',
            'Drzava' => 'Drzava',
            'pos_br' => 'Pos Br',
            'JIB' => 'Jib',
            'PDV' => 'Pdv',
            'Datum_rodjenja' => 'Datum Rodjenja',
            'Broj_LK' => 'Broj Lk',
            'Mjesto_izdavanja_lk' => 'Mjesto Izdavanja Lk',
        ];
    }
    /**
     * {@inheritdoc}
     * @return PartneriQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjektiQuery(get_called_class());
    }
}
