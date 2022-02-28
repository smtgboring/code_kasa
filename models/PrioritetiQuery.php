<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Prioriteti]].
 *
 * @see Prioriteti
 */
class PrioritetiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Prioriteti[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Prioriteti|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
