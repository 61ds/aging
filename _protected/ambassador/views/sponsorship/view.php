<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SponsorshipForm */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sponsorship Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="startup-form-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <p>
                        <?= Html::a('Back', ['index'], ['class' => 'btn btn-primary']) ?>

                    </p>

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
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
                            'address_zip',
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
                            [
                                'attribute'=>'logo',
                                'format' => 'html',
                                'value'=> Html::img(Yii::$app->params['baseurl'].'/uploads/thumbs/sponsor/images/'.$model->logo),
                            ],
                            'website',
                            'twitter',
                            'facebook',
                            'summary:ntext',
                            [
                                'attribute'=>'sponsoring',
                                'value' => $model->getSponsoring($model->sponsoring)
                            ],
                            [
                                'attribute'=>'sponsoring_other',
                                'value' => $model->getSponsoringOther($model->sponsoring_other)
                            ],
                            'item_description',
                            'agreed_amount',
                            'event_date:date',
                            'notes:ntext',
                            [
                                'label' => 'Preferred Payment Method',
                                'attribute'=>'preferred_payment',
                                'value' => $model->getPaymentMethod($model->preferred_payment)
                            ],
                            'created_at:date',
                            'updated_at:date',
                        ],
                    ]) ?>



                </div>
            </div>
        </div>
    </div>
</div>
