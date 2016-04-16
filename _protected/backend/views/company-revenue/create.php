<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CompanyRevenue */

$this->title = 'Create Company Revenue';
$this->params['breadcrumbs'][] = ['label' => 'Company Revenues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-revenue-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
