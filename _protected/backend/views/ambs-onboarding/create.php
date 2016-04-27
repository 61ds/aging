<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AmbsOnboarding */

$this->title = 'Create Ambs Onboarding';
$this->params['breadcrumbs'][] = ['label' => 'Ambs Onboardings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ambs-onboarding-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
