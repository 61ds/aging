<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CompanyStrategic */

$this->title = 'Create Company Strategic';
$this->params['breadcrumbs'][] = ['label' => 'Company Strategics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-strategic-create">
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
