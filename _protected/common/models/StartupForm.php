<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "startup_form".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $job_title
 * @property string $email
 * @property string $phone
 * @property string $linkedin
 * @property string $twitter
 * @property string $name
 * @property string $website
 * @property string $address
 * @property string $street_address
 * @property integer $address_city
 * @property integer $address_state
 * @property string $descr
 * @property string $logo
 * @property string $angel_list
 * @property integer $stage
 * @property string $summary
 * @property string $video
 * @property integer $category
 * @property string $category_other
 * @property string $category_choice
 * @property string $target_customer
 * @property string $business_model
 * @property string $competitors
 * @property integer $capital_raised
 * @property integer $revenue
 * @property string $strategic_priority
 * @property integer $like_to_apply
 * @property integer $first_choice
 * @property integer $second_choice
 * @property integer $third_choice
 * @property integer $like_to_host
 * @property string $pitch_events
 * @property string $pitch_city
 * @property integer $pitch_winner
 * @property string $why_pitch
 * @property integer $newsletter
 * @property integer $hear
 * @property string $hear_other
 * @property string $technology
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Cities $addressCity
 * @property Chapters $thirdChoice
 * @property States $addressState
 * @property CompanyStage $stage0
 * @property CompanyCategory $category0
 * @property CompanyCapital $capitalRaised
 * @property CompanyRevenue $revenue0
 * @property HearAbout $hear0
 * @property Chapters $firstChoice
 * @property Chapters $secondChoice
 */
class StartupForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'startup_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'job_title', 'email', 'phone', 'linkedin', 'twitter', 'name', 'website', 'address', 'street_address', 'address_city', 'address_state', 'descr', 'logo', 'angel_list', 'stage', 'summary', 'video', 'category', 'category_other', 'category_choice', 'target_customer', 'business_model', 'competitors', 'capital_raised', 'revenue', 'strategic_priority', 'like_to_apply', 'first_choice', 'second_choice', 'third_choice', 'like_to_host', 'pitch_events', 'pitch_city', 'pitch_winner', 'why_pitch', 'newsletter', 'hear', 'hear_other', 'technology', 'created_at', 'updated_at'], 'required'],
            [['address_city', 'address_state', 'stage', 'category', 'capital_raised', 'revenue', 'like_to_apply', 'first_choice', 'second_choice', 'third_choice', 'like_to_host', 'pitch_winner', 'newsletter', 'hear', 'created_at', 'updated_at'], 'integer'],
            [['descr', 'category_other', 'competitors', 'why_pitch', 'hear_other'], 'string'],
            [['first_name', 'last_name', 'job_title', 'linkedin', 'twitter', 'name', 'website', 'address', 'street_address', 'logo', 'angel_list', 'summary', 'video', 'category_choice', 'strategic_priority', 'pitch_city', 'technology'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 12],
            [['target_customer', 'business_model'], 'string', 'max' => 300],
            [['pitch_events'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'job_title' => 'Job Title',
            'email' => 'Email',
            'phone' => 'Phone',
            'linkedin' => 'Linkedin',
            'twitter' => 'Twitter',
            'name' => 'Name',
            'website' => 'Website',
            'address' => 'Address',
            'street_address' => 'Street Address',
            'address_city' => 'Address City',
            'address_state' => 'Address State',
            'descr' => 'Descr',
            'logo' => 'Logo',
            'angel_list' => 'Angel List',
            'stage' => 'Stage',
            'summary' => 'Summary',
            'video' => 'Video',
            'category' => 'Category',
            'category_other' => 'Category Other',
            'category_choice' => 'Category Choice',
            'target_customer' => 'Target Customer',
            'business_model' => 'Business Model',
            'competitors' => 'Competitors',
            'capital_raised' => 'Capital Raised',
            'revenue' => 'Revenue',
            'strategic_priority' => 'Strategic Priority',
            'like_to_apply' => 'Like To Apply',
            'first_choice' => 'First Choice',
            'second_choice' => 'Second Choice',
            'third_choice' => 'Third Choice',
            'like_to_host' => 'Like To Host',
            'pitch_events' => 'Pitch Events',
            'pitch_city' => 'Pitch City',
            'pitch_winner' => 'Pitch Winner',
            'why_pitch' => 'Why Pitch',
            'newsletter' => 'Newsletter',
            'hear' => 'Hear',
            'hear_other' => 'Hear Other',
            'technology' => 'Technology',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
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
    public function getThirdChoice()
    {
        return $this->hasOne(Chapters::className(), ['id' => 'third_choice']);
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
    public function getStage0()
    {
        return $this->hasOne(CompanyStage::className(), ['id' => 'stage']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory0()
    {
        return $this->hasOne(CompanyCategory::className(), ['id' => 'category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapitalRaised()
    {
        return $this->hasOne(CompanyCapital::className(), ['id' => 'capital_raised']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRevenue0()
    {
        return $this->hasOne(CompanyRevenue::className(), ['id' => 'revenue']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHear0()
    {
        return $this->hasOne(HearAbout::className(), ['id' => 'hear']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirstChoice()
    {
        return $this->hasOne(Chapters::className(), ['id' => 'first_choice']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSecondChoice()
    {
        return $this->hasOne(Chapters::className(), ['id' => 'second_choice']);
    }

    /**
     * @inheritdoc
     * @return StartupFormQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StartupFormQuery(get_called_class());
    }
}
