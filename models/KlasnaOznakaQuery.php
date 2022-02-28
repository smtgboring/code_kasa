<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[KlasnaOznaka]].
 *
 * @see KlasnaOznaka
 */
class KlasnaOznakaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return KlasnaOznaka[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return KlasnaOznaka|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
