<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[CompanyRevenue]].
 *
 * @see CompanyRevenue
 */
class CompanyRevenueQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CompanyRevenue[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CompanyRevenue|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}