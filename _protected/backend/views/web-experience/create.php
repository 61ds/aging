<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\WebExperience */

$this->title = 'Create Web Experience';
$this->params['breadcrumbs'][] = ['label' => 'Web Experiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-experience-create">
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
