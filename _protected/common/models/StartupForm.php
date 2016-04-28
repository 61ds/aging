<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

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
 * @property integer $address_zip
 * @property integer $address_city
 * @property integer $address_state
 * @property integer $address_country
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
 * @property Countries $addressCountry
 * @property States $addressState
 * @property CompanyStage $stage0
 * @property CompanyCategory $category0
 * @property CompanyCapital $capitalRaised
 * @property CompanyRevenue $revenue0
 * @property HearAbout $hear0
 * @property Chapters $firstChoice
 * @property Chapters $secondChoice
 */
class StartupForm extends ActiveRecord
{
    public $fullname;
    public $choices;
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
            [['first_name', 'job_title', 'email', 'phone', 'name', 'website','interested_in_joining', 'address', 'street_address', 'address_zip', 'address_city', 'address_state', 'address_country', 'descr', 'logo', 'stage', 'category', 'like_to_apply', 'first_choice', 'pitch_events', 'pitch_city', 'pitch_winner', 'why_pitch', 'newsletter','category_other','first_choice','hear_other'], 'required'],
            [['address_zip', 'address_city', 'address_state', 'address_country', 'stage', 'category', 'capital_raised', 'revenue', 'like_to_apply', 'first_choice', 'second_choice', 'third_choice', 'like_to_host', 'pitch_winner', 'newsletter', 'hear', 'created_at', 'updated_at'], 'integer'],
            [['descr', 'category_other', 'competitors', 'why_pitch', 'hear_other'], 'string'],
            [['first_name', 'last_name', 'job_title', 'linkedin', 'twitter', 'name', 'website', 'address', 'street_address', 'logo', 'angel_list', 'summary', 'video', 'category_choice', 'strategic_priority', 'technology'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 50],
            ['phone', 'match', 'pattern' => '/^[\*0-9]{10,13}$/','message'=>'Phone number must be numeric between 10-13 digits'],
            ['address_zip', 'match', 'pattern' => '/^[\*0-9]{4,8}$/','message'=>'Zip number must be numeric'],
            ['email', 'email'],
            [['linkedin','website'], 'url'],
            [['target_customer', 'business_model'], 'string', 'max' => 300],
            [['pitch_events'], 'string', 'max' => 150],
            [['address_city'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['address_city' => 'id']],

            [['address_country'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['address_country' => 'id']],
            [['address_state'], 'exist', 'skipOnError' => true, 'targetClass' => States::className(), 'targetAttribute' => ['address_state' => 'id']],
            [['stage'], 'exist', 'skipOnError' => true, 'targetClass' => CompanyStage::className(), 'targetAttribute' => ['stage' => 'id']],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => CompanyCategory::className(), 'targetAttribute' => ['category' => 'id']],
            [['capital_raised'], 'exist', 'skipOnError' => true, 'targetClass' => CompanyCapital::className(), 'targetAttribute' => ['capital_raised' => 'id']],
            [['revenue'], 'exist', 'skipOnError' => true, 'targetClass' => CompanyRevenue::className(), 'targetAttribute' => ['revenue' => 'id']],
            [['hear'], 'exist', 'skipOnError' => true, 'targetClass' => HearAbout::className(), 'targetAttribute' => ['hear' => 'id']],
            [['fullname','choices'], 'safe']
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
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'job_title' => 'Job Title',
            'email' => 'E-mail',
            'phone' => 'Phone Number',
            'linkedin' => 'LinkedIn URL ',
            'twitter' => 'Twitter handle',
            'name' => 'Company name',
            'website' => 'Company website',
            'address' => 'Company address',
            'street_address' => 'Street Address',
            'address_zip' => 'Postal / Zip Code',
            'address_city' => 'City',
            'address_state' => 'State / Province',
            'address_country' => 'Address Country',
            'descr' => 'Company description (25 word maximum) ',
            'logo' => 'Company Logo',
            'angel_list' => 'Angel List profile URL (if available)',
            'stage' => 'What stage is your company?',
            'summary' => 'Pitch deck / Executive Summary ',
            'video' => 'Video',
            'category' => 'Which category best fits your company?',
            'category_other' => 'Define Other',
            'category_choice' => 'Please tick up to two choices',
            'target_customer' => 'Target Customer',
            'business_model' => 'Channel / business model',
            'competitors' => 'Competition (Who are your main competitors?)',
            'capital_raised' => 'Capital Raised (USD)',
            'revenue' => 'Annual Revenues (USD)',
            'strategic_priority' => 'Strategic priority (max 2:)',
            'like_to_apply' => 'Would you like to apply for the Aging2.0 2016 Global Startup Search?',
            'first_choice' => 'First Choice',
            'second_choice' => 'Second Choice',
            'third_choice' => 'Third Choice',
            'like_to_host' => 'If your city is not listed would you like to host / help organize a local event? ',
            'pitch_events' => 'Did you pitch at one of the 2015 Aging2.0 #30in30in30 Pitch Events?',
            'pitch_city' => 'Which city / cities?',
            'pitch_winner' => 'Were you the winner of an event?',
            'why_pitch' => 'The Last Word: Why should you be selected to pitch?',
            'newsletter' => 'Would you like to receive the Aging2.0 CoverAGE newsletter?',
            'hear' => 'How did you hear about Aging2.0?',
            'hear_other' => 'Please Describe',
            'technology' => 'Type of technology used (pick up to 3)',
            'interested_in_joining' => 'Are you interested in joining the Aging2.0 Alliance? (www.aging2.com/alliance)',
            'created_at' => 'Submitted On',
            'updated_at' => 'Last updated On',
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
    public function getAddressCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'address_country']);
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
    public function getPitchCity($cities)
    {
        if($cities != ""){
        $arr_data = unserialize($cities);
        $joincitie = "";
        foreach($arr_data as $arr_datas){
            $id = $arr_datas;
            $event = Events::findOne($id);
            $joincitie .= $event->country->name .'-'. $event->state->name .'-'. \Yii::$app->formatter->asDatetime($event->event_date, "php:M d") . " , ";

        }
        return $joincitie;
        }else{
            return "-";
        }
    }

    /**
     * @inheritdoc
     * @return StartupFormQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StartupFormQuery(get_called_class());
    }

    //get all city
    public function getCities(){
        $cities = Cities::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($cities,'id','name');
    }

    //get all states
    public function getStates(){
        $states = States::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($states,'id','name');
    }

    //get all countries
    public function getCountries(){
        $countries = Countries::find()->where(['status' => 1])->orderBy('name')->all();
        return ArrayHelper::map($countries,'id','name');
    }

    //get all company stage
    public function getStages(){
        $stages = CompanyStage::find()->where(['status' => 1])->orderBy('id')->all();
        return ArrayHelper::map($stages,'id','name');
    }

    //get all company categories
    public function getCategories(){
        $categories = CompanyCategory::find()->where(['status' => 1])->orderBy('id')->all();
        return ArrayHelper::map($categories,'id','name');
    }

    //get all company technologies
    public function getTechnologies(){
        $tech = CompanyTechnology::find()->where(['status' => 1])->orderBy('id')->all();
        return ArrayHelper::map($tech,'id','name');
    }

    //get all company capitals
    public function getCapitals(){
        $capital = CompanyCapital::find()->where(['status' => 1])->orderBy('id')->all();
        return ArrayHelper::map($capital,'id','name');
    }

    //get all company revenues
    public function getRevenues(){
        $revenues = CompanyRevenue::find()->where(['status' => 1])->orderBy('id')->all();
        return ArrayHelper::map($revenues,'id','name');
    }

    //get all company strategics
    public function getStrategicPriorities(){
        $strategics = CompanyStrategic::find()->where(['status' => 1])->orderBy('id')->all();
        return ArrayHelper::map($strategics,'id','name');
    }
    public function getStrategicPriority($data){
        if($data != "") {
        $get = unserialize($data);
        $join ="";
        foreach($get as $gets){
            $id = $gets;
            $strategics = CompanyStrategic::findOne($id);
            $join .=  $strategics->name." , ";
        }
        return $join;
        }else{
            return "-";
        }
    }
    public function getCategoryChoice($data){

        if($data != "") {
        $get = unserialize($data);
        $join ="";
            if($get != "") {
                foreach ($get as $gets) {
                    $id = $gets;
                    $strategics = CompanyCategory::findOne($id);
                    $join .= $strategics->name . " , ";
                }
                return $join;
            }else{
                return "-";
            }

        }else{
            return "-";
        }
}
    public function getTechnology($data){
        if($data != "") {
            $get = unserialize($data);
            $join = "";
            foreach ($get as $gets) {
                $id = $gets;
                $strategics = CompanyTechnology::findOne($id);
                $join .= $strategics->name . " , ";
            }
            return $join;
        }else{
            return "-";
        }
    }
    //get all company chapters
    public function getChapters(){
        $chapters = Chapters::find()->where(['status' => 1])->orderBy('id')->all();
        return ArrayHelper::map($chapters,'id','name');
    }

    //get all company events
    public function getEventsList(){
        $events = Events::find()->where(['status' => 1])->orderBy('id')->all();
        foreach($events as $event){
            $name = $event->country->name .'-'. $event->state->name .'-'. \Yii::$app->formatter->asDatetime($event->event_date, "php:M d");
            $eventLists[] = array('id'=>$event->id,'name'=>$name );
        }
        return ArrayHelper::map($eventLists,'id', 'name');
    }

    //get all company chapters
    public function getHearAbout(){
        $hears = HearAbout::find()->where(['status' => 1])->orderBy('id')->all();
        return ArrayHelper::map($hears,'id','name');
    }
}
