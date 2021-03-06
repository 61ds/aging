<?php
use common\helpers\CssHelper;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Accounts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                <h1>

                <?= Html::encode($this->title) ?>

                <span class="pull-right">
                    <?= Html::a(Yii::t('app', 'Create new Account'), ['create'], ['class' => 'btn btn-success']) ?>
                    <?= Html::a(Yii::t('app', 'Create Ambassador'), ['create-ambassador'], ['class' => 'btn btn-success']) ?>
                </span>

                </h1>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'summary' => false,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'username',
                        'email:email',
                        // status
                        [
                            'attribute'=>'status',
                            'filter' => $searchModel->statusList,
                            'value' => function ($data) {
                                return $data->statusName;
                            },
                            'contentOptions'=>function($model, $key, $index, $column) {
                                return ['class'=>CssHelper::statusCss($model->statusName)];
                            }
                        ],
                        // role
                        [
                            'attribute'=>'item_name',
                            'filter' => $searchModel->rolesList,
                            'value' => function ($data) {
                                return $data->roleName;
                            },
                            'contentOptions'=>function($model, $key, $index, $column) {

                                return ['class'=>CssHelper::roleCss($model->roleName)];
                            }
                        ],
                        // buttons
                        ['class' => 'yii\grid\ActionColumn',
                        'header' => "Menu",
                        'template' => '{update} {delete}',
                            'buttons' => [

                                'update' => function ($url, $model, $key) {
                                   if($model->roleName == "ambassador"){
                                       return Html::a('', $url, ['title'=>'Manage user',
                                           'class'=>'glyphicon glyphicon-user']);
                                   }else{
                                       return Html::a('', $url, ['title'=>'Manage user',
                                           'class'=>'glyphicon glyphicon-pencil']);
                                   }
                                },
                                'delete' => function ($url, $model, $key) {
                                    return Html::a('', $url,
                                    ['title'=>'Delete user',
                                        'class'=>'glyphicon glyphicon-trash',
                                        'data' => [
                                            'confirm' => Yii::t('app', 'Are you sure you want to delete this user?'),
                                            'method' => 'post']
                                    ]);
                                }
                            ]
                        ], // ActionColumn
                    ], // columns
                ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
