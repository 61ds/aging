<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "company_technology".
 *
 * @property integer $id
 * @property integer $name
 * @property integer $status
 */
class CompanyTechnology extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company_technology';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'status'], 'required'],
            [['name', 'status'], 'integer']
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
     * @return CompanyTechnologyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompanyTechnologyQuery(get_called_class());
    }
}
