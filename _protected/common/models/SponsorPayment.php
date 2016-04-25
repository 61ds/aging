<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sponsor_payment".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 */
class SponsorPayment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sponsor_payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'status'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255]
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
}
