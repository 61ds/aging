<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[ChapterRoles]].
 *
 * @see ChapterRoles
 */
class ChapterRolesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ChapterRoles[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ChapterRoles|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}