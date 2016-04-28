<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AmbassadorProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ambassador Profiles');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ambassador-profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ambassador Profile'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'email:email',
            'country_code',
            // 'area_code',
            // 'phone_number',
            // 'chapter',
            // 'chapter_city',
            // 'chapter_state',
            // 'chapter_country',
            // 'twitter_handle',
            // 'chapter_email:email',
            // 'address',
            // 'street_address',
            // 'address_city',
            // 'address_state',
            // 'address_country',
            // 'address_zip',
            // 'file',
            // 'notes:ntext',
            // 'preferred_payment',
            // 'account_name',
            // 'bank_name',
            // 'bank_account',
            // 'aba_routing',
            // 'bank_address',
            // 'bank_street_address',
            // 'bank_city',
            // 'bank_state',
            // 'bank_country',
            // 'bank_zip',
            // 'paypal_email:email',
            // 'check_to',
            // 'user_id',
            // 'onboarding_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
