<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "ambs_onboarding".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property integer $country_code
 * @property integer $area_code
 * @property integer $phone_number
 * @property integer $chapter
 * @property integer $chapter_city
 * @property integer $chapter_state
 * @property integer $chapter_country
 * @property string $twitter_handle
 * @property string $chapter_email
 * @property string $address
 * @property string $street_address
 * @property integer $address_city
 * @property integer $address_state
 * @property integer $address_country
 * @property integer $address_zip
 * @property string $file
 * @property string $notes
 * @property integer $preferred_payment
 * @property string $account_name
 * @property string $bank_name
 * @property string $bank_account
 * @property string $aba_routing
 * @property string $bank_address
 * @property string $bank_street_address
 * @property integer $bank_city
 * @property integer $bank_state
 * @property integer $bank_country
 * @property integer $bank_zip
 * @property string $paypal_email
 * @property string $check_to
 *
 * @property Chapters $chapter0
 * @property Cities $addressCity
 * @property States $addressState
 * @property Countries $addressCountry
 * @property Cities $bankCity
 * @property States $bankState
 * @property Countries $bankCountry
 */
class AmbsOnboarding extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ambs_onboarding';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'country_code',  'phone_number', 'chapter', 'chapter_state', 'chapter_country', 'address', 'street_address', 'preferred_payment', 'address_state', 'address_country', 'address_zip', 'file'], 'required'],
            [['country_code', 'area_code', 'phone_number', 'chapter', 'chapter_city', 'chapter_state', 'chapter_country', 'address_city', 'address_state', 'address_country', 'address_zip', 'preferred_payment', 'bank_city', 'bank_state', 'bank_country', 'bank_zip','approved','created_at','updated_at'], 'integer'],
            [['notes'], 'string'],
            [['email','paypal_email','chapter_email'], 'email'],

            [['first_name', 'last_name', 'email', 'twitter_handle', 'chapter_email', 'address', 'street_address', 'file', 'account_name', 'bank_name', 'bank_account', 'aba_routing', 'bank_address', 'bank_street_address','bank_city', 'bank_state', 'bank_country', 'paypal_email', 'check_to'], 'string', 'max' => 255],
            [['chapter'], 'exist', 'skipOnError' => true, 'targetClass' => Chapters::className(), 'targetAttribute' => ['chapter' => 'id']],
            [['address_city'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['address_city' => 'id']],
            [['address_state'], 'exist', 'skipOnError' => true, 'targetClass' => States::className(), 'targetAttribute' => ['address_state' => 'id']],
            [['address_country'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['address_country' => 'id']],
            [['paypal_email', 'chapter_city','check_to','account_name', 'bank_name', 'bank_account', 'aba_routing', 'bank_address', 'bank_street_address', 'bank_state', 'bank_country', 'bank_zip',],\frontend\validations\ClientSideValidator::className()],
            [['email'], \frontend\validations\ClientSideValidator::className() ],
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
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'country_code' => Yii::t('app', 'Country Code'),
            'area_code' => Yii::t('app', 'Area Code'),
            'approved' => Yii::t('app', 'Approved'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'chapter' => Yii::t('app', 'Chapter'),
            'chapter_city' => Yii::t('app', 'Chapter City'),
            'chapter_state' => Yii::t('app', 'State / Region '),
            'chapter_country' => Yii::t('app', 'Chapter Country'),
            'twitter_handle' => Yii::t('app', 'Aging2.0 Chapter twitter handle'),
            'chapter_email' => Yii::t('app', 'Aging2.0 Chapter email address'),
            'address' => Yii::t('app', 'Address'),
            'street_address' => Yii::t('app', 'Street Address'),
            'address_city' => Yii::t('app', 'Address City'),
            'address_state' => Yii::t('app', 'State / Region '),
            'address_country' => Yii::t('app', 'Address Country'),
            'address_zip' => Yii::t('app', 'Address Zip'),
            'file' => Yii::t('app', 'Alternatively, upload your completed W9 or W8'),
            'notes' => Yii::t('app', 'Additional notes to Aging2.0 HQ'),
            'preferred_payment' => Yii::t('app', 'Preferred Form of Payment '),
            'account_name' => Yii::t('app', 'Account Name'),
            'bank_name' => Yii::t('app', 'Bank Name'),
            'bank_account' => Yii::t('app', 'Bank Account'),
            'aba_routing' => Yii::t('app', 'Aba Routing'),
            'bank_address' => Yii::t('app', 'Address'),
            'bank_street_address' => Yii::t('app', 'Street Address'),
            'bank_city' => Yii::t('app', 'City'),
            'bank_state' => Yii::t('app', 'State / Region '),
            'bank_country' => Yii::t('app', 'Country'),
            'bank_zip' => Yii::t('app', 'Zip'),
            'paypal_email' => Yii::t('app', 'Paypal Email'),
            'check_to' => Yii::t('app', 'Check To'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChapter0()
    {
        return $this->hasOne(Chapters::className(), ['id' => 'chapter']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddressCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'address_city']);
    }
    public function getAmbassdor()
    {
        return $this->hasOne(Cities::className(), ['id' => 'ambassdor_id']);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBankCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'bank_city']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBankState()
    {
        return $this->hasOne(States::className(), ['id' => 'bank_state']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBankCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'bank_country']);
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
    public function getChapters()
    {
        $spo_pay = Chapters::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($spo_pay,'id','name');
    }


}
