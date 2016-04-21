<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ChapterRoles */

$this->title = 'Update Chapter Roles: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Chapter Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chapter-roles-update">
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
