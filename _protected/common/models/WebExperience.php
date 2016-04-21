<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "web_experience".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 */
class WebExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_experience';
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
     * @return WebExperienceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new WebExperienceQuery(get_called_class());
    }
}
