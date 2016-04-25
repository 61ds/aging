<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SponsorPayment */

$this->title = 'Update Sponsor Payment: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sponsor Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sponsor-payment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
