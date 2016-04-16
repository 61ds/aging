<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[CompanyCapital]].
 *
 * @see CompanyCapital
 */
class CompanyCapitalQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CompanyCapital[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CompanyCapital|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}