<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategoryChoicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ($category?$category->name:"All")." Category - Choices";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-choices-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <p>
                        <?= Html::a('Create Category Choices', ['create','category_id'=>($category?$category->id:0)], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'name',
                            'category_id',
                            'status',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
