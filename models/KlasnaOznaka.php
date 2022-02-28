<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "klasna_oznaka".
 *
 * @property int $ID_klasna_oznaka
 * @property string $Klasna_Oznaka
 */
class KlasnaOznaka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'klasna_oznaka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Klasna_Oznaka'], 'required'],
            [['Klasna_Oznaka'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_klasna_oznaka' => 'Id Klasna Oznaka',
            'Klasna_Oznaka' => 'Klasna Oznaka',
        ];
    }
    /**
     * Gets query for [[Projektis]].
     *
     * @return \yii\db\ActiveQuery|ProjektiQuery
     */
    public function getProjektis()
    {
        return $this->hasMany(Projekti::className(), ['Klasna_Oznaka_id' => 'ID_klasna_oznaka']);
    }

    /**
     * {@inheritdoc}
     * @return KlasnaOznakaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KlasnaOznakaQuery(get_called_class());
    }

}
