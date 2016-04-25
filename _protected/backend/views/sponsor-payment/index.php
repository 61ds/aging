<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SponsorPaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sponsor Payments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsor-payment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
