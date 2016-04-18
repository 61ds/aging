<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CategoryChoices */

$this->title = 'Create Category Choices';
$this->params['breadcrumbs'][] = ['label' => 'Category Choices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-choices-create">
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
