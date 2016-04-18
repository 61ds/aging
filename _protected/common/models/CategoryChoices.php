<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category_choices".
 *
 * @property integer $id
 * @property string $name
 * @property integer $category_id
 * @property integer $status
 *
 * @property CompanyCategory $category
 */
class CategoryChoices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_choices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category_id'], 'required'],
            [['category_id', 'status'], 'integer'],
            [['name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category_id' => 'Category ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(CompanyCategory::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     * @return CategoryChoicesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoryChoicesQuery(get_called_class());
    }
}
