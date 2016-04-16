<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CompanyCategory */

$this->title = 'Create Company Category';
$this->params['breadcrumbs'][] = ['label' => 'Company Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-category-create">
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
