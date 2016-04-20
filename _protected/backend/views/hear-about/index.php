<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HearAboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hear Abouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hear-about-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <p>
                        <?= Html::a('Create New Option', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        //'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn','header' => 'S.No.'],

                            'name',
                            [
                                'attribute' => 'isdescription',
                                'value' => function($model) {
                                    if ($model->isdescription)
                                        return "Yes";
                                    else
                                        return "No";
                                }
                            ],
                            [
                                'attribute' => 'status',
                                'value' => function ($model) {
                                    if ($model->status) {
                                        return Html::a(Yii::t('app', 'Active'), null, [
                                            'class' => 'btn btn-success status',
                                            'data-id' => $model->id,
                                            'href' => 'javascript:void(0);',
                                        ]);
                                    } else {
                                        return Html::a(Yii::t('app', 'Inactive'), null, [
                                            'class' => 'btn btn-danger status',
                                            'data-id' => $model->id,
                                            'href' => 'javascript:void(0);',
                                        ]);
                                    }
                                },
                                'contentOptions' => ['style' => 'width:160px;text-align:center'],
                                'format' => 'raw',
                                'filter'=>array("1"=>"Active","0"=>"Inactive"),
                            ],

                            ['class' => 'yii\grid\ActionColumn','header' => 'Action'],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
