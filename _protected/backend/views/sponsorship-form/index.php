<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SponsorshipFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sponsorship Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsorship-form-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sponsorship Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'organization',
            'first_name',
            'last_name',
            'title',
            // 'email:email',
            // 'phone_country_code',
            // 'phone_area_code',
            // 'phone_number',
            // 'address',
            // 'street_address',
            // 'address_city',
            // 'address_state',
            // 'address_country',
            // 'address_zip',
            // 'logo',
            // 'website',
            // 'twitter',
            // 'facebook',
            // 'summary:ntext',
            // 'sponsoring',
            // 'agreed_amount',
            // 'event_date',
            // 'notes:ntext',
            // 'preferred_payment',
            // 'created_at',
            // 'updated_at',
            // 'sponsoring_other',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
