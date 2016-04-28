<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AmbassadorProfile;

/**
 * AmbassadorProfileSearch represents the model behind the search form about `common\models\AmbassadorProfile`.
 */
class AmbassadorProfileSearch extends AmbassadorProfile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'country_code', 'area_code', 'phone_number', 'chapter', 'chapter_city', 'chapter_state', 'chapter_country', 'address_city', 'address_state', 'address_country', 'address_zip', 'preferred_payment', 'bank_city', 'bank_state', 'bank_country', 'bank_zip', 'user_id', 'onboarding_id'], 'integer'],
            [['first_name', 'last_name', 'email', 'twitter_handle', 'chapter_email', 'address', 'street_address', 'file', 'notes', 'account_name', 'bank_name', 'bank_account', 'aba_routing', 'bank_address', 'bank_street_address', 'paypal_email', 'check_to'], 'safe'],
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
        $query = AmbassadorProfile::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'country_code' => $this->country_code,
            'area_code' => $this->area_code,
            'phone_number' => $this->phone_number,
            'chapter' => $this->chapter,
            'chapter_city' => $this->chapter_city,
            'chapter_state' => $this->chapter_state,
            'chapter_country' => $this->chapter_country,
            'address_city' => $this->address_city,
            'address_state' => $this->address_state,
            'address_country' => $this->address_country,
            'address_zip' => $this->address_zip,
            'preferred_payment' => $this->preferred_payment,
            'bank_city' => $this->bank_city,
            'bank_state' => $this->bank_state,
            'bank_country' => $this->bank_country,
            'bank_zip' => $this->bank_zip,
            'user_id' => $this->user_id,
            'onboarding_id' => $this->onboarding_id,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'twitter_handle', $this->twitter_handle])
            ->andFilterWhere(['like', 'chapter_email', $this->chapter_email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'street_address', $this->street_address])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'account_name', $this->account_name])
            ->andFilterWhere(['like', 'bank_name', $this->bank_name])
            ->andFilterWhere(['like', 'bank_account', $this->bank_account])
            ->andFilterWhere(['like', 'aba_routing', $this->aba_routing])
            ->andFilterWhere(['like', 'bank_address', $this->bank_address])
            ->andFilterWhere(['like', 'bank_street_address', $this->bank_street_address])
            ->andFilterWhere(['like', 'paypal_email', $this->paypal_email])
            ->andFilterWhere(['like', 'check_to', $this->check_to]);

        return $dataProvider;
    }
}
