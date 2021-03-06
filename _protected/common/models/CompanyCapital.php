<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "company_capital".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 */
class CompanyCapital extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company_capital';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
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
            'name' => 'Name',
            'status' => 'Status',
        ];
    }

    /**
     * @inheritdoc
     * @return CompanyCapitalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompanyCapitalQuery(get_called_class());
    }
}
