<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SponsorPayment */

$this->title = 'Create Sponsor Payment';
$this->params['breadcrumbs'][] = ['label' => 'Sponsor Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsor-payment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
