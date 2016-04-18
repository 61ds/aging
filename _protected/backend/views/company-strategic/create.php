<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CompanyStrategic */

$this->title = 'Create Company Strategic';
$this->params['breadcrumbs'][] = ['label' => 'Company Strategics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-strategic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
