<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Statusi]].
 *
 * @see Statusi
 */
class StatusiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Statusi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Statusi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
