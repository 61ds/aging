<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CompanyStage */

$this->title = 'Create Company Stage';
$this->params['breadcrumbs'][] = ['label' => 'Company Stages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-stage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
