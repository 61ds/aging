<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\WebExperience */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Web Experiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-experience-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'status',
        ],
    ]) ?>


</div>
</div>
</div>
</div>
</div>

