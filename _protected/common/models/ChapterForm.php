<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "chapter_form".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $title
 * @property string $organization
 * @property string $email
 * @property string $address
 * @property string $street_address
 * @property integer $address_city
 * @property integer $address_state
 * @property integer $address_zip
 * @property integer $address_country
 * @property string $phone
 * @property string $personal_twitter
 * @property string $work_twitter
 * @property string $linkedin
 * @property string $skype
 * @property string $organization_website
 * @property string $organization_descr
 * @property string $personal_website
 * @property string $summary_bio
 * @property string $skills
 * @property string $headshot
 * @property string $resume
 * @property string $events_attended
 * @property integer $chapter_city
 * @property integer $chapter_state
 * @property integer $chapter_country
 * @property string $location_notes
 * @property string $why_get_involved
 * @property integer $help_event
 * @property string $activities_work
 * @property string $how_involved
 * @property integer $experience_web
 * @property string $organization_affliation
 * @property string $ideas_speaker
 * @property string $biggest_challenge
 * @property string $other_info
 * @property string $how_involved_other
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Cities $chapterCity
 * @property Countries $chapterCountry
 * @property Cities $addressCity
 * @property States $addressState
 * @property Countries $addressCountry
 * @property States $chapterState
 * @property WebExperience $experienceWeb
 */
class ChapterForm extends \yii\db\ActiveRecord
{
    public $acceptance;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chapter_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'first_name', 'last_name','acceptance', 'email', 'phone', 'summary_bio', 'skills', 'headshot',  'chapter_state', 'chapter_country', 'why_get_involved', 'help_event',], 'required'],
            [['id', 'address_zip',  'chapter_city', 'chapter_state', 'chapter_country', 'help_event', 'experience_web', 'created_at', 'updated_at','onboarding_status'], 'integer'],
            [['organization_descr', 'summary_bio', 'events_attended', 'location_notes', 'why_get_involved', 'activities_work', 'organization_affliation', 'ideas_speaker', 'biggest_challenge', 'other_info'], 'string'],
            [['first_name', 'last_name', 'title', 'organization', 'email', 'address', 'street_address', 'personal_twitter', 'work_twitter', 'linkedin', 'organization_website', 'personal_website', 'how_involved', 'how_involved_other'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 12],
            [['skype', 'headshot', 'resume'], 'string', 'max' => 50],
            [['address_city'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['address_city' => 'id']],
            [['address_country'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['address_country' => 'id']],
            [['address_state'], 'exist', 'skipOnError' => true, 'targetClass' => States::className(), 'targetAttribute' => ['address_state' => 'id']],
            [['skills'], 'string', 'max' => 200],
            [['acceptance'], 'safe'],

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
            'title' => 'Title',
            'acceptance' => 'Please confirm your acceptance of our Values and Policies',
            'organization' => 'Organization',
            'email' => 'Email',
            'onboarding_status' => 'Onboarding status',
            'address' => 'Address',
            'street_address' => 'Street Address',
            'address_city' => 'Address City',
            'address_state' => 'Address State',
            'address_zip' => 'Address Zip',
            'address_country' => 'Address Country',
            'phone' => 'Phone number (International format) ',
            'personal_twitter' => 'Personal Twitter',
            'work_twitter' => 'Work Twitter',
            'linkedin' => 'LinkedIn Profile URL:',
            'skype' => 'Skype ID',
            'organization_website' => 'Organization Website',
            'organization_descr' => 'Organization description',
            'personal_website' => 'Personal website / blog',
            'summary_bio' => 'Summary bio (50 words) ',
            'skills' => 'Your skills and expertise (up to 10 comma separated keywords)',
            'headshot' => 'Picture (headshot)',
            'resume' => 'Resume / bio',
            'events_attended' => 'Have you attended an Aging2.0 event/s in the past? Which ones?',
            'chapter_city' => 'What CITY would you like to start / join an Aging2.0 Chapter ',
            'chapter_state' => 'Chapter State',
            'chapter_country' => 'Chapter Country',
            'location_notes' => 'Additional notes about location',
            'why_get_involved' => 'Why do you want to get involved with Aging2.0?',
            'help_event' => 'Would you be willing to help organize event/s? ',
            'activities_work' => 'What specific activities would you most like to work on?',
            'how_involved' => 'How would you like to be involved? ',
            'experience_web' => 'How much experience in using web-based community tools (such as Eventbrite, Wordpress etc)',
            'organization_affliation' => 'What organization affiliations will you draw upon for the organization of events and the development of the local Aging2.0 network? ',
            'ideas_speaker' => 'What are some ideas you have for speakers at future events?',
            'biggest_challenge' => 'What do you see as the biggest challenge in growing the Aging2.0 community in your area? ',
            'other_info' => 'Any other information that would be helpful for us to review your application?',
            'how_involved_other' => 'How Involved Other',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChapterCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'chapter_city']);
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
    public function getChapterState()
    {
        return $this->hasOne(States::className(), ['id' => 'chapter_state']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExperienceWeb()
    {
        return $this->hasOne(WebExperience::className(), ['id' => 'experience_web']);
    }

    /**
     * @inheritdoc
     * @return ChapterFormQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ChapterFormQuery(get_called_class());
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
    public function getHowInvolve($data){
        if($data != ""){
            $get = unserialize($data);
            $join ="";
            foreach($get as $gets){
                $id = $gets;
                $strategics = ChapterRoles::findOne($id);
                $join .=  $strategics->name." , ";
            }
            return $join;
        }else{
            return "-";
        }

    }
    public function getExperienceWebs($id){

        $strategics = WebExperience::findOne($id);

        if( $strategics){
            return $strategics->name;
        }else{
            return "-";
        }

    }
    public function getHowInvolved(){
        $strategics = ChapterRoles::find()->where(['status' => 1])->orderBy('id')->all();
        return ArrayHelper::map($strategics,'id','name');
    }
    public function getWebExp(){
        $strategics = WebExperience::find()->where(['status' => 1])->orderBy('id')->all();
        return ArrayHelper::map($strategics,'id','name');
    }

    public function contact($emailto,$body,$subject,$emailfrom,$name)
    {
        return Yii::$app->mailer->compose()
            ->setTo($emailto)
            ->setFrom([$emailfrom => $name])
            ->setSubject($subject)
            ->setTextBody($body)
            ->send();
    }

}
