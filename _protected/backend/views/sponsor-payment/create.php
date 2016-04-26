<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SponsorPayment */

$this->title = 'Create Sponsor Payment';
$this->params['breadcrumbs'][] = ['label' => 'Sponsor Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


