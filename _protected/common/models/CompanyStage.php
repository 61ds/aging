<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "company_stage".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 */
class CompanyStage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company_stage';
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
     * @return CompanyStageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompanyStageQuery(get_called_class());
    }
}
