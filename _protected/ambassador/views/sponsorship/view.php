<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SponsorshipForm */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sponsorship Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsorship-form-view">

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
            'organization',
            'first_name',
            'last_name',
            'title',
            'email:email',
            'phone_country_code',
            'phone_area_code',
            'phone_number',
            'address',
            'street_address',
            'address_city',
            'address_state',
            'address_country',
            'address_zip',
            'logo',
            'website',
            'twitter',
            'facebook',
            'summary:ntext',
            'sponsoring',
            'agreed_amount',
            'event_date',
            'notes:ntext',
            'preferred_payment',
            'created_at',
            'updated_at',
            'sponsoring_other',
        ],
    ]) ?>

</div>
