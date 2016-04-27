<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ChapterForm;

/**
 * ChapterFormSearch represents the model behind the search form about `common\models\ChapterForm`.
 */
class ChapterFormSearch extends ChapterForm
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'address_city', 'address_state', 'address_zip', 'address_country', 'chapter_city', 'chapter_state', 'chapter_country', 'help_event', 'experience_web', 'created_at', 'updated_at','onboarding_status'], 'integer'],
            [['first_name', 'last_name', 'title', 'organization', 'email', 'address', 'street_address', 'phone', 'personal_twitter', 'work_twitter', 'linkedin', 'skype', 'organization_website', 'organization_descr', 'personal_website', 'summary_bio', 'skills', 'headshot', 'resume', 'events_attended', 'location_notes', 'why_get_involved', 'activities_work', 'how_involved', 'organization_affliation', 'ideas_speaker', 'biggest_challenge', 'other_info', 'how_involved_other'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ChapterForm::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'address_city' => $this->address_city,
            'address_state' => $this->address_state,
            'address_zip' => $this->address_zip,
            'onboarding_status' => $this->onboarding_status,
            'address_country' => $this->address_country,
            'chapter_city' => $this->chapter_city,
            'chapter_state' => $this->chapter_state,
            'chapter_country' => $this->chapter_country,
            'help_event' => $this->help_event,
            'experience_web' => $this->experience_web,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'organization', $this->organization])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'street_address', $this->street_address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'personal_twitter', $this->personal_twitter])
            ->andFilterWhere(['like', 'work_twitter', $this->work_twitter])
            ->andFilterWhere(['like', 'linkedin', $this->linkedin])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'organization_website', $this->organization_website])
            ->andFilterWhere(['like', 'organization_descr', $this->organization_descr])
            ->andFilterWhere(['like', 'personal_website', $this->personal_website])
            ->andFilterWhere(['like', 'summary_bio', $this->summary_bio])
            ->andFilterWhere(['like', 'skills', $this->skills])
            ->andFilterWhere(['like', 'headshot', $this->headshot])
            ->andFilterWhere(['like', 'resume', $this->resume])
            ->andFilterWhere(['like', 'events_attended', $this->events_attended])
            ->andFilterWhere(['like', 'location_notes', $this->location_notes])
            ->andFilterWhere(['like', 'why_get_involved', $this->why_get_involved])
            ->andFilterWhere(['like', 'activities_work', $this->activities_work])
            ->andFilterWhere(['like', 'how_involved', $this->how_involved])
            ->andFilterWhere(['like', 'organization_affliation', $this->organization_affliation])
            ->andFilterWhere(['like', 'ideas_speaker', $this->ideas_speaker])
            ->andFilterWhere(['like', 'biggest_challenge', $this->biggest_challenge])
            ->andFilterWhere(['like', 'other_info', $this->other_info])
            ->andFilterWhere(['like', 'how_involved_other', $this->how_involved_other]);

        return $dataProvider;
    }
}
