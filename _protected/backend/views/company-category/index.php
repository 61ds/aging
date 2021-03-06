<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CompanyCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Startup Company Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-category-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <p>
                        <?= Html::a('Create New Category', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        //'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn','header' => 'S.No.'],

                            ['attribute' =>'name', 'enableSorting' => false],
                            [
                                'attribute' => 'isdescription',
                                'value' => function($model) {
                                    if ($model->isdescription)
                                        return "Yes";
                                    else
                                        return "No";
                                },
                                'enableSorting' => false,
                            ],
                            [
                                'attribute'=>'has_choices',
                                'label' => 'Manage Choices',
                                'value' => function ($model) {
                                    if($model->has_choices){
                                        return Html::a(Yii::t('app', 'View Choices'), ['/category-choices', 'id' => $model->id], [
                                            'class' => 'btn btn-primary',
                                            'data-method' => 'post',
                                        ]);
                                    }else{
                                        return "No";
                                    }
                                },
                                'format'=>'raw',
                                'enableSorting' => false,
                                'contentOptions' => ['style' => 'text-align:center'],
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
                                'enableSorting' => false,
                                'filter'=>array("1"=>"Active","0"=>"Inactive"),
                            ],

                            ['class' => 'yii\grid\ActionColumn','header' => 'Action', 'contentOptions' => ['style' => 'width:160px;letter-spacing:10px;text-align:center'],],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
