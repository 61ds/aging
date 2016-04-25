<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SponsorshipForm;

/**
 * SponsorshipFormSearch represents the model behind the search form about `common\models\SponsorshipForm`.
 */
class SponsorshipFormSearch extends SponsorshipForm
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'address_city', 'address_state', 'address_country', 'address_zip', 'sponsoring', 'event_date', 'preferred_payment', 'created_at', 'updated_at'], 'integer'],
            [['organization', 'first_name', 'last_name', 'title', 'email', 'phone_country_code', 'phone_area_code', 'phone_number', 'address', 'street_address', 'logo', 'website', 'twitter', 'facebook', 'summary', 'notes', 'sponsoring_other'], 'safe'],
            [['agreed_amount'], 'number'],
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
        $query = SponsorshipForm::find();

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
            'address_country' => $this->address_country,
            'address_zip' => $this->address_zip,
            'sponsoring' => $this->sponsoring,
            'agreed_amount' => $this->agreed_amount,
            'event_date' => $this->event_date,
            'preferred_payment' => $this->preferred_payment,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'organization', $this->organization])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone_country_code', $this->phone_country_code])
            ->andFilterWhere(['like', 'phone_area_code', $this->phone_area_code])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'street_address', $this->street_address])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'twitter', $this->twitter])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'sponsoring_other', $this->sponsoring_other]);

        return $dataProvider;
    }
}
