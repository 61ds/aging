<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SponsorshipForm */

$this->title = 'Create Sponsorship Form';
$this->params['breadcrumbs'][] = ['label' => 'Sponsorship Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


