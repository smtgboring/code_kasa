<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Tura]].
 *
 * @see Tura
 */
class TuraQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Tura[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Tura|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
