<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ChapterRoles */

$this->title = 'Create Chapter Roles';
$this->params['breadcrumbs'][] = ['label' => 'Chapter Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chapter-roles-create">
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
