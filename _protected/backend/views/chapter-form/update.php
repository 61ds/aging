<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ChapterForm */

$this->title = 'Update Chapter Form: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Chapter Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chapter-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
