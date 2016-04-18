<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[CompanyTechnology]].
 *
 * @see CompanyTechnology
 */
class CompanyTechnologyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CompanyTechnology[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CompanyTechnology|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}