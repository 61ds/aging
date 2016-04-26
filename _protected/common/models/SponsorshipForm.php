<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use common\models\SponsorPayment;
use common\models\Sponsor;
/**
 * This is the model class for table "sponsorship_form".
 *
 * @property integer $id
 * @property string $organization
 * @property string $first_name
 * @property string $last_name
 * @property string $title
 * @property string $email
 * @property string $phone_country_code
 * @property string $phone_area_code
 * @property string $phone_number
 * @property string $address
 * @property string $street_address
 * @property integer $address_city
 * @property integer $address_state
 * @property integer $address_country
 * @property integer $address_zip
 * @property string $logo
 * @property string $website
 * @property string $twitter
 * @property string $facebook
 * @property string $summary
 * @property integer $sponsoring
 * @property double $agreed_amount
 * @property integer $event_date
 * @property string $notes
 * @property integer $preferred_payment
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $sponsoring_other
 *
 * @property Cities $addressCity
 * @property States $addressState
 * @property Countries $addressCountry
 */
class SponsorshipForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sponsorship_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organization', 'first_name', 'last_name', 'title', 'email', 'phone_number', 'address', 'address_zip', 'logo', 'website', 'twitter', 'facebook', 'summary', 'sponsoring', 'agreed_amount', 'event_date', 'preferred_payment'], 'required'],
            [['address_city', 'address_state', 'address_country', 'address_zip', 'sponsoring',  'preferred_payment', 'created_at', 'updated_at'], 'integer'],
            [['summary', 'notes'], 'string'],
            [['agreed_amount'], 'number'],
            [['organization', 'first_name', 'last_name', 'title', 'email', 'address', 'street_address', 'logo', 'website', 'twitter', 'facebook', 'sponsoring_other'], 'string', 'max' => 100],
            [['phone_country_code', 'phone_area_code'], 'string', 'max' => 5],
            [['address_city'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['address_city' => 'id']],
            [['address_country'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['address_country' => 'id']],
            [['address_state'], 'exist', 'skipOnError' => true, 'targetClass' => States::className(), 'targetAttribute' => ['address_state' => 'id']],
            [['phone_number'], 'string', 'max' => 12]
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'organization' => 'Sponsoring organization',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'title' => 'Contact title',
            'email' => 'Contact email',
            'phone_country_code' => 'Country Code',
            'phone_area_code' => 'Area Code',
            'phone_number' => 'Phone Number',
            'address' => 'Street Address',
            'street_address' => 'Street Address Line 2',
            'address_city' => 'City',
            'address_state' => 'State / Province',
            'address_country' => 'Country',
            'address_zip' => 'Postal / Zip Code',
            'logo' => 'Company logo',
            'website' => 'Company URL',
            'twitter' => 'Twitter handle',
            'facebook' => 'Facebook URL',
            'summary' => 'Company Summary (optional)',
            'sponsoring' => 'What are you sponsoring?',
            'agreed_amount' => 'Agreed Sponsorship Amount',
            'event_date' => 'Event date (optional)',
            'notes' => 'Notes about the sponsorship (specific instructions, requirements etc)',
            'preferred_payment' => 'Preferred form of payment',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'sponsoring_other' => 'Sponsoring Other',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddressCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'address_city']);
    }
    public function getCity($id)
    {
        $data =  Cities::findOne($id);
        return $data->name;
    }
    public function getCountry($id)
    {
        $data =  Countries::findOne($id);
        return $data->name;
    }
    public function getState($id)
    {
        $data =  States::findOne($id);
        return $data->name;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddressState()
    {
        return $this->hasOne(States::className(), ['id' => 'address_state']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddressCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'address_country']);
    }
    public function getCities(){
        $cities = Cities::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($cities,'id','name');
    }

    //get all states
    public function getStates()
    {
        $states = States::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($states,'id','name');
    }

    //get all countries
    public function getCountries()
    {
        $countries = Countries::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($countries,'id','name');
    }
    public function getSponsor()
    {
        $sponsor = Sponsor::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($sponsor,'id','name');
    }
    public function getSponsorpayment()
    {
        $spo_pay = SponsorPayment::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($spo_pay,'id','name');
    }
}
