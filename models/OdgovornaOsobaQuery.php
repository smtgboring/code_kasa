<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[OdgovornaOsoba]].
 *
 * @see OdgovornaOsoba
 */
class OdgovornaOsobaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OdgovornaOsoba[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OdgovornaOsoba|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
