<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
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
            [['id', 'first_name', 'last_name', 'email', 'phone', 'summary_bio', 'skills', 'headshot', 'chapter_city', 'chapter_state', 'chapter_country', 'why_get_involved', 'help_event', 'how_involved', 'experience_web', 'organization_affliation', 'ideas_speaker', 'biggest_challenge', 'how_involved_other', 'created_at', 'updated_at'], 'required'],
            [['id', 'address_city', 'address_state', 'address_zip', 'address_country', 'chapter_city', 'chapter_state', 'chapter_country', 'help_event', 'experience_web', 'created_at', 'updated_at'], 'integer'],
            [['organization_descr', 'summary_bio', 'events_attended', 'location_notes', 'why_get_involved', 'activities_work', 'organization_affliation', 'ideas_speaker', 'biggest_challenge', 'other_info'], 'string'],
            [['first_name', 'last_name', 'title', 'organization', 'email', 'address', 'street_address', 'personal_twitter', 'work_twitter', 'linkedin', 'organization_website', 'personal_website', 'how_involved', 'how_involved_other'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 12],
            [['skype', 'headshot', 'resume'], 'string', 'max' => 50],
            [['skills'], 'string', 'max' => 200]
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
            'organization' => 'Organization',
            'email' => 'Email',
            'address' => 'Address',
            'street_address' => 'Street Address',
            'address_city' => 'Address City',
            'address_state' => 'Address State',
            'address_zip' => 'Address Zip',
            'address_country' => 'Address Country',
            'phone' => 'Phone',
            'personal_twitter' => 'Personal Twitter',
            'work_twitter' => 'Work Twitter',
            'linkedin' => 'Linkedin',
            'skype' => 'Skype',
            'organization_website' => 'Organization Website',
            'organization_descr' => 'Organization Descr',
            'personal_website' => 'Personal Website',
            'summary_bio' => 'Summary Bio',
            'skills' => 'Skills',
            'headshot' => 'Headshot',
            'resume' => 'Resume',
            'events_attended' => 'Events Attended',
            'chapter_city' => 'Chapter City',
            'chapter_state' => 'Chapter State',
            'chapter_country' => 'Chapter Country',
            'location_notes' => 'Location Notes',
            'why_get_involved' => 'Why Get Involved',
            'help_event' => 'Help Event',
            'activities_work' => 'Activities Work',
            'how_involved' => 'How Involved',
            'experience_web' => 'Experience Web',
            'organization_affliation' => 'Organization Affliation',
            'ideas_speaker' => 'Ideas Speaker',
            'biggest_challenge' => 'Biggest Challenge',
            'other_info' => 'Other Info',
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
}
