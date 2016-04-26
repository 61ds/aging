<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\StartupForm;

/**
 * StartupFormSearch represents the model behind the search form about `common\models\StartupForm`.
 */
class StartupFormSearch extends StartupForm
{
    public $fullname;
    public $choices;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'address_city', 'address_state', 'stage', 'category', 'capital_raised', 'revenue', 'like_to_apply', 'first_choice', 'second_choice', 'third_choice', 'like_to_host', 'pitch_winner', 'newsletter', 'hear', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name', 'job_title', 'email', 'phone', 'linkedin', 'twitter', 'name', 'website', 'address', 'street_address', 'descr', 'logo', 'angel_list', 'summary', 'video', 'category_other', 'category_choice', 'target_customer', 'business_model', 'competitors', 'strategic_priority', 'pitch_events', 'pitch_city', 'why_pitch', 'hear_other', 'technology'], 'safe'],
            [['fullname','choices'], 'safe']
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
        $query = StartupForm::find();

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
            'stage' => $this->stage,
            'category' => $this->category,
            'capital_raised' => $this->capital_raised,
            'revenue' => $this->revenue,
            'like_to_apply' => $this->like_to_apply,
            'first_choice' => $this->first_choice,
            'second_choice' => $this->second_choice,
            'third_choice' => $this->third_choice,
            'like_to_host' => $this->like_to_host,
            'pitch_winner' => $this->pitch_winner,
            'newsletter' => $this->newsletter,
            'hear' => $this->hear,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'job_title', $this->job_title])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'linkedin', $this->linkedin])
            ->andFilterWhere(['like', 'twitter', $this->twitter])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'street_address', $this->street_address])
            ->andFilterWhere(['like', 'descr', $this->descr])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'angel_list', $this->angel_list])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'video', $this->video])
            ->andFilterWhere(['like', 'category_other', $this->category_other])
            ->andFilterWhere(['like', 'category_choice', $this->category_choice])
            ->andFilterWhere(['like', 'target_customer', $this->target_customer])
            ->andFilterWhere(['like', 'business_model', $this->business_model])
            ->andFilterWhere(['like', 'competitors', $this->competitors])
            ->andFilterWhere(['like', 'strategic_priority', $this->strategic_priority])
            ->andFilterWhere(['like', 'pitch_events', $this->pitch_events])
            ->andFilterWhere(['like', 'pitch_city', $this->pitch_city])
            ->andFilterWhere(['like', 'why_pitch', $this->why_pitch])
            ->andFilterWhere(['like', 'hear_other', $this->hear_other])
            ->andFilterWhere(['like', 'technology', $this->technology]);

        return $dataProvider;
    }
}
