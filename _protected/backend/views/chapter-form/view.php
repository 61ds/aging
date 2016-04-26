<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ChapterForm */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Chapter Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chapter-form-view">

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
            'first_name',
            'last_name',
            'title',
            'organization',
            'email:email',
            'address',
            'street_address',
            'address_zip',
            [
                'attribute'=>'address_city',
                'value'=>$model->addressCity->name,
            ],
            [
                'attribute'=>'address_state',
                'value'=>$model->addressState->name,
            ],
            [
                'attribute'=>'address_country',
                'value'=>$model->addressCountry->name,
            ],
            'phone',
            'personal_twitter',
            'work_twitter',
            'linkedin',
            'skype',
            'organization_website',
            'organization_descr:ntext',
            'personal_website',
            'summary_bio:ntext',
            'skills',
            [
                'attribute'=>'headshot',
                'format' => 'html',
                'value'=> Html::img(Yii::$app->params['baseurl'].'/uploads/thumbs/chapter/images/'.$model->headshot),
            ],
            'resume',
            'events_attended:ntext',
            [
                'attribute'=>'chapter_city',
                'value'=>$model->addressCity->name,
            ],
            [
                'attribute'=>'chapter_state',
                'value'=>$model->addressState->name,
            ],
            [
                'attribute'=>'chapter_country',
                'value'=>$model->addressCountry->name,
            ],
            'location_notes:ntext',
            'why_get_involved:ntext',
            'help_event',
            'activities_work:ntext',
            [
                'attribute'=>'how_involved',
                'value' => $model->getHowInvolve($model->how_involved)
            ],
            'experience_web',
            [
                'attribute'=>'experience_web',
                'value' => $model->getHowInvolve($model->experience_web)
            ],
            'organization_affliation:ntext',
            'ideas_speaker:ntext',
            'biggest_challenge:ntext',
            'other_info:ntext',
            'how_involved_other',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
