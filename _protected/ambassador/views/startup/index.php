<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StartupFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Startup Forms';
$this->params['breadcrumbs'][] = $this->title;


$gridColumns = [
    ['class' => 'yii\grid\SerialColumn','header' => 'S.No.'],
    [
        'format' => 'raw',
        'attribute' => 'choices',
        'value' =>  function ($model) {
            $choices = "";
            if($model->first_name)
                $choices .= '1st:&nbsp;&nbsp;&nbsp;'. $model->firstChoice->name;
            if($model->second_choice)
                $choices .= '<br>2nd:&nbsp;&nbsp;'. $model->secondChoice->name;
            if($model->third_choice)
                $choices .= '<br>3rd:&nbsp;&nbsp;&nbsp;'. $model->thirdChoice->name;
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
    'descr:ntext',
    [
        'attribute' => 'category',
        'value' =>  function ($model) {
            return $model->category0->name;
        },
    ],
    [
        'attribute' => 'stage',
        'value' =>  function ($model) {
            return $model->stage0->name;
        },
    ],
    [
        'attribute' => 'address_city',
        'value' =>  function ($model) {
            return $model->addressCity->name;
        },
    ],
    [
        'attribute' => 'address_state',
        'value' =>  function ($model) {
            return $model->addressState->name;
        },
    ],
    [
        'attribute' => 'address_country',
        'value' =>  function ($model) {
            return $model->addressCountry->name;
        },
    ],

    'created_at:Date',
    'job_title',
     'linkedin',
     'twitter',
     'website',
     'address',
     'street_address',
     'address_zip',

     'logo',
     'angel_list',

     'summary',
     'video',

    // 'category_other:ntext',
    // 'category_choice',
     'technology',
     'target_customer',
     'business_model',
     'capital_raised',
     'revenue',
     'strategic_priority',
     'like_to_apply',

     'like_to_host',
     'pitch_events',
    'pitch_city',
     'pitch_winner',
     'why_pitch:ntext',
    // 'newsletter',
    // 'interested_in_joining',
    // 'hear',
    // 'hear_other:ntext',



];

?>
<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            <?php echo ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumns,
                'fontAwesome' => true,
                'exportConfig' => [
                    ExportMenu::FORMAT_PDF => false,
                    ExportMenu::FORMAT_EXCEL_X => false,
                    ExportMenu::FORMAT_EXCEL => false,
                ]
            ]);?>
        </div>
    </div>
</div>

<div class="startup-form-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">

                <?php Pjax::begin(); ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn','header' => 'S.No.'],
                            [
                                'format' => 'raw',
                                'attribute' => 'choices',
                                'value' =>  function ($model) {
                                    $choices = "";
                                    if($model->first_name)
                                        $choices .= '1st:&nbsp;&nbsp;&nbsp;'. $model->firstChoice->name;
                                    if($model->second_choice)
                                        $choices .= '<br>2nd:&nbsp;&nbsp;'. $model->secondChoice->name;
                                    if($model->third_choice)
                                        $choices .= '<br>3rd:&nbsp;&nbsp;&nbsp;'. $model->thirdChoice->name;
                                    return $choices;
                                },
                            ],
                            'name',
                            [
                                'label' => 'Name',
                                'attribute' => 'fullname',
                                'value' =>  function ($model) {
                                    return $model->first_name ." ". $model->last_name;
                                },
                            ],
                            'email:email',
                            'phone',

                            [
                                'label' => 'Company Description',
                                'attribute' => 'descr',
                            ],
                            [
                                'label' => 'Category',
                                'attribute' => 'category',
                                'value' =>  function ($model) {
                                    return $model->category0->name;
                                },
                            ],
                            [
                                'label' => 'What Stage?',
                                'attribute' => 'stage',
                                'value' =>  function ($model) {
                                    return $model->stage0->name;
                                },
                            ],
                            [
                                'attribute' => 'address_city',
                                'value' =>  function ($model) {
                                    return $model->addressCity->name;
                                },
                            ],
                            [
                                'attribute' => 'address_state',
                                'value' =>  function ($model) {
                                    return $model->addressState->name;
                                },
                            ],
                            [
                                'attribute' => 'address_country',
                                'value' =>  function ($model) {
                                    return $model->addressCountry->name;
                                },
                            ],

                            'created_at:Date',

                            // 'linkedin',
                            // 'twitter',
                            // 'name',
                            // 'website',
                            // 'address',
                            // 'street_address',
                            // 'address_zip',
                            // 'address_city',
                            // 'address_state',
                            // 'address_country',

                            // 'logo',
                            // 'angel_list',

                            // 'summary',
                            // 'video',

                            // 'category_other:ntext',
                            // 'category_choice',
                            // 'target_customer',
                            // 'business_model',
                            // 'competitors:ntext',
                            // 'capital_raised',
                            // 'revenue',
                            // 'strategic_priority',
                            // 'like_to_apply',

                            // 'like_to_host',
                            // 'pitch_events',
                            // 'pitch_city',
                            // 'pitch_winner',
                            // 'why_pitch:ntext',
                            // 'newsletter',
                            // 'interested_in_joining',
                            // 'hear',
                            // 'hear_other:ntext',
                            // 'technology',
                            // 'created_at',
                            // 'updated_at',

                            [
                                'class' => 'yii\grid\ActionColumn','header'=>'Actions',
                                'template' => '{view}',
                                'contentOptions' => ['style' => 'width:160px;letter-spacing:10px;text-align:center'],
                            ],
                        ],
                    ]); ?>
                <?php Pjax::end(); ?>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>

