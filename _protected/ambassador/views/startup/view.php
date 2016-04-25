<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\StartupForm */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Startup Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="startup-form-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'first_name',
            'last_name',
            'job_title',
            'email:email',
            'phone',
            'linkedin',
            'twitter',
            'name',
            'website',
            'address',
            'street_address',
            'address_zip',
            'address_city',
            'address_state',
            'address_country',
            'descr:ntext',
            'logo',
            'angel_list',
            'stage',
            'summary',
            'video',
            'category',
            'category_other:ntext',
            'category_choice',
            'target_customer',
            'business_model',
            'competitors:ntext',
            'capital_raised',
            'revenue',
            'strategic_priority',
            'like_to_apply',
            'first_choice',
            'second_choice',
            'third_choice',
            'like_to_host',
            'pitch_events',
            'pitch_city',
            'pitch_winner',
            'why_pitch:ntext',
            'newsletter',
            'interested_in_joining',
            'hear',
            'hear_other:ntext',
            'technology',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
