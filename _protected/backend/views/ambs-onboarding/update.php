<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AmbsOnboarding */

$this->title = 'Update Ambs Onboarding: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ambs Onboardings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ambs-onboarding-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
