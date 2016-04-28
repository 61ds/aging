<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AmbassadorProfile */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ambassador Profiles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ambassador-profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'last_name',
            'email:email',
            'country_code',
            'area_code',
            'phone_number',
            'chapter',
            'chapter_city',
            'chapter_state',
            'chapter_country',
            'twitter_handle',
            'chapter_email:email',
            'address',
            'street_address',
            'address_city',
            'address_state',
            'address_country',
            'address_zip',
            'file',
            'notes:ntext',
            'preferred_payment',
            'account_name',
            'bank_name',
            'bank_account',
            'aba_routing',
            'bank_address',
            'bank_street_address',
            'bank_city',
            'bank_state',
            'bank_country',
            'bank_zip',
            'paypal_email:email',
            'check_to',
            'user_id',
            'onboarding_id',
        ],
    ]) ?>

</div>
