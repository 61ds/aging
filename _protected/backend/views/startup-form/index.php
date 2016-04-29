<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StartupFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Startup Forms';
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
                            ['class' => 'yii\grid\SerialColumn','header'=>'S.No.'],
                            [
                                'format' => 'raw',
                                'attribute' => 'choices',
                                'value' =>  function ($model) {
									$choices = "";
									if($model->first_choice != ''){
										
										if($model->first_name)
											$choices .= '1st:&nbsp;&nbsp;&nbsp;'. $model->firstChoice->name;
										if($model->second_choice)
											$choices .= '<br>2nd:&nbsp;&nbsp;'. $model->secondChoice->name;
										if($model->third_choice)
											$choices .= '<br>3rd:&nbsp;&nbsp;&nbsp;'. $model->thirdChoice->name;
									}else{
										$choices .= 'Not applied';
									}
                                    return $choices;
                                },
                            ],
                            'name',
                            [
                                'attribute' => 'fullname',
                                'value' =>  function ($model) {
                                    return $model->first_name ." ". $model->last_name;
                                },
                            ],
                            'email:email',
                            'phone',
                            [
                                'attribute' => 'stage',
                                'value' =>  function ($model) {
                                    return $model->stage0->name;
                                },
                            ],

                            'created_at:Date',
                            // 'phone',
                            // 'linkedin',
                            // 'twitter',
                            // 'name',
                            // 'website',
                            // 'address',
                            // 'street_address',
                            // 'address_city',
                            // 'address_state',
                            // 'descr:ntext',
                            // 'logo',
                            // 'angel_list',
                            // 'stage',
                            // 'summary',
                            // 'video',
                            // 'category',
                            // 'category_other:ntext',
                            // 'category_choice',
                            // 'target_customer',
                            // 'business_model',
                            // 'competitors:ntext',
                            // 'capital_raised',
                            // 'revenue',
                            // 'strategic_priority',
                            // 'like_to_apply',
                            // 'first_choice',
                            // 'second_choice',
                            // 'third_choice',
                            // 'like_to_host',
                            // 'pitch_events',
                            // 'pitch_city',
                            // 'pitch_winner',
                            // 'why_pitch:ntext',
                            // 'newsletter',
                            // 'hear',
                            // 'hear_other:ntext',
                            // 'technology',
                            // 'created_at',
                            // 'updated_at',

                            ['class' => 'yii\grid\ActionColumn',
                                'header'=>'Actions',
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
