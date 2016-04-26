<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
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

                <?php Pjax::begin(); ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn',
                                'header' => 'S.No.'],
                            'first_name',
                            'last_name',
                            'job_title',
                            'email:email',
                            // 'phone',
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

