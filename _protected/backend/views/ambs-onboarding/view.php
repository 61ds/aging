<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AmbsOnboarding */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ambs Onboardings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ambs-onboarding-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
        ],
    ]) ?>

</div>
