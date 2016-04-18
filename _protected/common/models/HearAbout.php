<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hear_about".
 *
 * @property integer $id
 * @property string $name
 * @property integer $isdescription
 * @property integer $status
 */
class HearAbout extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hear_about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['isdescription', 'status'], 'integer'],
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
            'isdescription' => 'Description Required?',
            'status' => 'Status',
        ];
    }

    /**
     * @inheritdoc
     * @return HearAboutQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HearAboutQuery(get_called_class());
    }
}
