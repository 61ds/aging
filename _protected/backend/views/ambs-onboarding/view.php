<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AmbsOnboarding */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ambs Onboardings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="startup-form-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
    <p>
        <?php
            echo Html::a('Create As ambassador', ['user/create-ambassador', 'id' => $model->id], ['class' => 'btn btn-primary']);
        ?>
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
            [
                'attribute'=>'chapter_city',
                'value'=>$model->addressCity->name,
            ],
            [
                'attribute'=>'chapter_state',
                'value'=>$model->addressState->name,
            ],
            [
                'attribute'=>'chapter_country',
                'value'=>$model->addressCountry->name,
            ],
            'twitter_handle',
            [
                'attribute'=>'chapter',
                'value'=>$model->chapter0->name,
            ],
            'chapter_email:email',
            'address',
            'street_address',
            [
                'attribute'=>'address_city',
                'value'=>$model->addressCity->name,
            ],
            [
                'attribute'=>'address_state',
                'value'=>$model->addressState->name,
            ],
            [
                'attribute'=>'address_country',
                'value'=>$model->addressCountry->name,
            ],
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
            [
                'attribute'=>'bank_city',
                'value'=>$model->addressCity->name,
            ],
            [
                'attribute'=>'bank_state',
                'value'=>$model->addressState->name,
            ],
            [
                'attribute'=>'bank_country',
                'value'=>$model->addressCountry->name,
            ],
            'bank_zip',
            'paypal_email:email',
            'check_to',
        ],
    ]) ?>

                </div>
            </div>
        </div>
    </div>
</div>