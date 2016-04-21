<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "chapter_roles".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 */
class ChapterRoles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chapter_roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['isdescription', 'status'], 'integer'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Role',
            'isdescription' => 'Description Required?',
            'status' => 'Status',
        ];
    }

    /**
     * @inheritdoc
     * @return ChapterRolesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ChapterRolesQuery(get_called_class());
    }
}
