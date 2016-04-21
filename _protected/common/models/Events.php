<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $name
 * @property integer $country_id
 * @property integer $state_id
 * @property integer $city_id
 * @property string $event_date
 * @property integer $status
 *
 * @property Cities $city
 * @property Countries $country
 * @property States $state
 */
class Events extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'country_id', 'state_id', 'city_id'], 'required'],
            [['country_id', 'state_id', 'city_id', 'status'], 'integer'],
            [['event_date', 'event_end_date'], 'safe'],
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
            'country_id' => 'Country',
            'state_id' => 'State',
            'city_id' => 'City',
            'event_date' => 'Event Start Date',
            'event_end_date' => 'Event End Date',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(States::className(), ['id' => 'state_id']);
    }

    public function getCountries(){
        $countries = Countries::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($countries,'id','name');
    }
    public function getStates(){
        $states = States::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($states,'id','name');
    }
    public function getCities(){
        $countries = Cities::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($countries,'id','name');
    }

    /**
     * @inheritdoc
     * @return EventsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventsQuery(get_called_class());
    }
}
