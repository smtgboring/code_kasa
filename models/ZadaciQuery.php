<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Zadaci]].
 *
 * @see Zadaci
 */
class ZadaciQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Zadaci[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Zadaci|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
