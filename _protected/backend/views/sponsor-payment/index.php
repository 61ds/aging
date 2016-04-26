<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SponsorPaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sponsor Payments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="startup-form-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
    <p>
        <?= Html::a('Create Sponsor Payment', ['create'], ['class' => 'btn btn-success']) ?>
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
