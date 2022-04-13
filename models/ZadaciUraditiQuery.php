<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ZadaciUraditi]].
 *
 * @see ZadaciUraditi
 */
class ZadaciUraditiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ZadaciUraditi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ZadaciUraditi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
