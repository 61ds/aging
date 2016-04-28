<?php

namespace common\models;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "ambassador_profile".
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
 * @property integer $user_id
 * @property integer $onboarding_id
 *
 * @property User $user
 * @property States $bankState
 * @property Countries $bankCountry
 * @property AmbsOnboarding $onboarding
 * @property Cities $chapterCity
 * @property States $chapterState
 * @property Countries $chapterCountry
 * @property Cities $addressCity
 * @property States $addressState
 * @property Countries $addressCountry
 * @property Cities $bankCity
 */
class AmbassadorProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ambassador_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'email', 'user_id', 'onboarding_id'], 'required'],
            [['country_code', 'area_code', 'phone_number', 'chapter', 'chapter_city', 'chapter_state', 'chapter_country', 'address_city', 'address_state', 'address_country', 'address_zip', 'preferred_payment', 'bank_city', 'bank_state', 'bank_country', 'bank_zip', 'user_id', 'onboarding_id'], 'integer'],
            [['notes'], 'string'],
            [['first_name', 'last_name', 'email', 'twitter_handle', 'chapter_email', 'address', 'street_address', 'file', 'account_name', 'bank_name', 'bank_account', 'aba_routing', 'bank_address', 'bank_street_address', 'paypal_email', 'check_to'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['onboarding_id'], 'exist', 'skipOnError' => true, 'targetClass' => AmbsOnboarding::className(), 'targetAttribute' => ['onboarding_id' => 'id']],

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
            'phone_number' => Yii::t('app', 'Phone Number'),
            'chapter' => Yii::t('app', 'Chapter'),
            'chapter_city' => Yii::t('app', 'Chapter City'),
            'chapter_state' => Yii::t('app', 'Chapter State'),
            'chapter_country' => Yii::t('app', 'Chapter Country'),
            'twitter_handle' => Yii::t('app', 'Twitter Handle'),
            'chapter_email' => Yii::t('app', 'Chapter Email'),
            'address' => Yii::t('app', 'Address'),
            'street_address' => Yii::t('app', 'Street Address'),
            'address_city' => Yii::t('app', 'Address City'),
            'address_state' => Yii::t('app', 'Address State'),
            'address_country' => Yii::t('app', 'Address Country'),
            'address_zip' => Yii::t('app', 'Address Zip'),
            'file' => Yii::t('app', 'File'),
            'notes' => Yii::t('app', 'Notes'),
            'preferred_payment' => Yii::t('app', 'Preferred Payment'),
            'account_name' => Yii::t('app', 'Account Name'),
            'bank_name' => Yii::t('app', 'Bank Name'),
            'bank_account' => Yii::t('app', 'Bank Account'),
            'aba_routing' => Yii::t('app', 'Aba Routing'),
            'bank_address' => Yii::t('app', 'Bank Address'),
            'bank_street_address' => Yii::t('app', 'Bank Street Address'),
            'bank_city' => Yii::t('app', 'Bank City'),
            'bank_state' => Yii::t('app', 'Bank State'),
            'bank_country' => Yii::t('app', 'Bank Country'),
            'bank_zip' => Yii::t('app', 'Bank Zip'),
            'paypal_email' => Yii::t('app', 'Paypal Email'),
            'check_to' => Yii::t('app', 'Check To'),
            'user_id' => Yii::t('app', 'User ID'),
            'onboarding_id' => Yii::t('app', 'Onboarding ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBankState()
    {
        return $this->hasOne(States::className(), ['id' => 'bank_state']);
    }
    public function getChapter0()
    {
        return $this->hasOne(Chapters::className(), ['id' => 'chapter']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBankCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'bank_country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOnboarding()
    {
        return $this->hasOne(AmbsOnboarding::className(), ['id' => 'onboarding_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChapterCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'chapter_city']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChapterState()
    {
        return $this->hasOne(States::className(), ['id' => 'chapter_state']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChapterCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'chapter_country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddressCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'address_city']);
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
