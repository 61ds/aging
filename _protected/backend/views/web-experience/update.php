<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\WebExperience */

$this->title = 'Update Web Experience: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Web Experiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="web-experience-update">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
