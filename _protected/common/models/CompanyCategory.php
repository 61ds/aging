<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "company_category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 */
class CompanyCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
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
            'status' => 'Status',
        ];
    }

    /**
     * @inheritdoc
     * @return CompanyCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompanyCategoryQuery(get_called_class());
    }
}
