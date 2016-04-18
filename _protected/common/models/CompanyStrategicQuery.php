<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[CompanyStrategic]].
 *
 * @see CompanyStrategic
 */
class CompanyStrategicQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CompanyStrategic[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CompanyStrategic|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}