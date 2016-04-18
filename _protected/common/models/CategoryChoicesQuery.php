<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[CategoryChoices]].
 *
 * @see CategoryChoices
 */
class CategoryChoicesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CategoryChoices[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CategoryChoices|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}