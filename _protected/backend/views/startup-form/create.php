<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\StartupForm */

$this->title = 'Create Startup Form';
$this->params['breadcrumbs'][] = ['label' => 'Startup Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="startup-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
