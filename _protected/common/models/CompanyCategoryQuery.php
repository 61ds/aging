<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[CompanyCategory]].
 *
 * @see CompanyCategory
 */
class CompanyCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CompanyCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CompanyCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}