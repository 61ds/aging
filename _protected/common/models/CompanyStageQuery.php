<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[CompanyStage]].
 *
 * @see CompanyStage
 */
class CompanyStageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CompanyStage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CompanyStage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}