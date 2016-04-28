<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AmbsOnboardingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ambs Onboardings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="startup-form-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn','header' => 'S.No.'],
                            [
                                'attribute' => 'fullname',
                                'value' =>  function ($model) {
                                    return $model->first_name ." ". $model->last_name;
                                },
                            ],
                            'email:email',
                            //'country_code',
                            // 'area_code',
                            [
                                'label' => 'Phone',
                                'attribute' => 'phone_number',
                                'value' =>  function ($model) {
                                    return $model->phone_number;
                                },
                            ],
                            [
                                'label' => 'Chapter',
                                'attribute' => 'chapter',
                                'value' =>  function ($model) {
                                    return $model->chapter0->name;
                                },
                                'filter' =>  $main_model->chapters,
                            ],



                            'twitter_handle',
                            // 'chapter_email:email',
                            // 'address',
                            // 'street_address',
                            // 'address_city',
                            // 'address_state',
                            // 'address_country',
                            // 'address_zip',
                            // 'file',
                            // 'notes:ntext',

                            [
                                'label' => 'Preferred Payment',
                                'attribute' => 'preferred_payment',
                                'value' => function ($model) {
                                    if ($model->preferred_payment == 1) {
                                        return 'By Check';
                                    }else if($model->preferred_payment == 2) {
                                        return  'Electronic Bank Transfer';
                                    }else if($model->preferred_payment == 3){
                                        return  'By Paypal';
                                    }
                                },
                                'filter'=>array('1'=>'Check', '2'=>'Electronic Bank Transfer','3'=>'Paypal'),
                            ],
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

                            ['class' => 'yii\grid\ActionColumn',
                                'header'=>'Actions',
                                'buttons' => [
                                    'view' =>function ($url, $model, $key) {
                                        $options = array_merge([
                                            'title' => Yii::t('yii', 'View'),
                                            'aria-label' => Yii::t('yii', 'View'),
                                            'data-pjax' => '0',
                                        ], []);
                                        return Html::a('<span class="glyphicon glyphicon-folder-open"></span>', ['view-approved','id'=>$model->id], $options);
                                    },
                                ],
                                'template' => '{view}',
                                'contentOptions' => ['style' => 'width:160px;letter-spacing:10px;text-align:center'],
                            ],
                        ],
                    ]); ?>

                </div>
            </div>
        </div>
    </div>
</div>
