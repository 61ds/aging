<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[StartupForm]].
 *
 * @see StartupForm
 */
class StartupFormQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return StartupForm[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return StartupForm|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}