<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Partneri]].
 *
 * @see Partneri
 */
class PartneriQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Partneri[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Partneri|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
