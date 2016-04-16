<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CompanyCapital */

$this->title = 'Create Company Capital';
$this->params['breadcrumbs'][] = ['label' => 'Company Capitals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-capital-create">
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
