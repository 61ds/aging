<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HearAbout */

$this->title = 'Update Hear About: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Hear Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hear-about-update">
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
