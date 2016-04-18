<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CompanyTechnologySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Company Technologies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-technology-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <p>
        <?= Html::a('Create Company Technology', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
