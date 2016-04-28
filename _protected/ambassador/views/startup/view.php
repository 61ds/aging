<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\StartupForm */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Startup Forms', 'url' => ['index']];
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
                            'first_name',
                            'last_name',
                            'job_title',
                            'email:email',
                            'phone',
                            'linkedin',
                            'twitter',
                            'name',
                            'website',
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

                            'descr:ntext',
                            'angel_list',
                            [
                                'attribute'=>'stage',
                                'value'=>$model->stage0->name,
                            ],
                            [
                                'attribute'=>'logo',
                                'format' => 'html',
                                'value'=> Html::img(Yii::$app->params['baseurl'].'/uploads/thumbs/startup/images/'.$model->logo),
                            ],
                            [
                                'attribute'=>'summary',
                                'format' => 'html',
                                'value'=> Url::to(Yii::$app->params['baseurl'].'/uploads/startup/docs/'.$model->summary, true),
                            ],

                            'video',

                            [
                                'attribute'=>'category',
                                'value'=>$model->category0->name,
                            ],

                            'category_other:ntext',
                            [
                                'attribute'=>'category_choice',
                                'value' => $model->getCategoryChoice($model->category_choice)
                            ],
                            'target_customer',
                            'business_model',
                            'competitors:ntext',
                            [
                                'attribute'=>'capital_raised',
                                'value'=>$model->capitalRaised->name,
                            ],
                            [
                                'attribute'=>'revenue',
                                'value'=>$model->revenue0->name,
                            ],
                            [
                                'attribute'=>'strategic_priority',
                                'value' => $model->getStrategicPriority($model->strategic_priority)
                            ],
                            [
                                'attribute'=>'like_to_apply',
                                'value' => ($model->like_to_apply)? "Yes" : 'No'
                            ],
                            [
                                'attribute'=>'first_choice',
                                'value' => ($model->first_choice)? $model->firstChoice->name : '-'
                            ],
                            [
                                'attribute'=>'second_choice',
                                'value' => ($model->second_choice)? $model->secondChoice->name : '-'
                            ],
                            [
                                'attribute'=>'third_choice',
                                'value' => ($model->third_choice)? $model->thirdChoice->name : '-'
                            ],
                            [
                                'attribute'=>'like_to_host',
                                'value' => ($model->like_to_host)? "Yes" : 'No'
                            ],
                            [
                                'attribute'=>'pitch_city',
                                'value' => $model->getPitchCity($model->pitch_city)
                            ],
                            [
                                'attribute'=>'pitch_events',
                                'value' => ($model->pitch_events)? "Yes" : 'No'
                            ],
                            [
                                'attribute'=>'pitch_winner',
                                'value' => ($model->pitch_winner)? "Yes" : 'No'
                            ],
                            'why_pitch:ntext',
                            [
                                'attribute'=>'newsletter',
                                'value' => ($model->newsletter)? "Yes" : 'No'
                            ],
                            'hear_other:ntext',
                            [
                                'attribute'=>'technology',
                                'value' => $model->getTechnology($model->technology)
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

