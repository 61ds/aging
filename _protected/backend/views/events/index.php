<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\DatePicker;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EventsSerarch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <p>
                        <?= Html::a('Add Event', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?php Pjax::begin() ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn','header' => 'S.No.'],

                            'name',
                            [
                                'attribute' => 'country_id',
                                'value' => function($model){
                                    return $model->country->name;
                                },
                            ],
                            [
                                'attribute' => 'state_id',
                                'value' => function($model){
                                    return $model->state->name;
                                },
                            ],
                            [
                                'attribute' => 'city_id',
                                'value' => function($model){
                                    return $model->city->name;
                                },
                            ],
                            [
                                'attribute' => 'event_date',
                                'value' => 'event_date',
                                'filter' => DatePicker::widget(['name' => 'EventsSerarch[event_date]', 'options' =>['class'=> 'form-control'], 'value'=>$searchModel->event_date, 'dateFormat' => 'yyyy-MM-dd']),
                                'format' => 'raw',
                            ],
                            /*[
                                'attribute' => 'event_end_date',
                                'value' => 'event_end_date',
                                'filter' => DatePicker::widget(['name' => 'EventsSerarch[event_end_date]', 'options' =>['class'=> 'form-control'], 'value'=>$searchModel->event_end_date, 'dateFormat' => 'yyyy-MM-dd']),
                                'format' => 'raw',
                            ],*/

                            // 'status',

                            ['class' => 'yii\grid\ActionColumn', 'contentOptions' => ['style' => 'width:120px;letter-spacing:8px;text-align:center'],'header' => 'Action'],
                        ],
                    ]); ?>
                    <?php Pjax::end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
