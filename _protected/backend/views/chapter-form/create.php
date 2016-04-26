<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ChapterForm */

$this->title = 'Create Chapter Form';
$this->params['breadcrumbs'][] = ['label' => 'Chapter Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chapter-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
