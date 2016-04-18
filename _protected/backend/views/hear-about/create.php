<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HearAbout */

$this->title = 'Create Hear About';
$this->params['breadcrumbs'][] = ['label' => 'Hear Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hear-about-create">
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
