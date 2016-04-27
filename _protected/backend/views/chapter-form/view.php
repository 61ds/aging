<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ChapterForm */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Chapter Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="startup-form-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">

    <p>
        <?php if($model->onboarding_status == 0)
            echo Html::a('Send onboarding Form', ['onboarding', 'id' => $model->id], ['class' => 'btn btn-primary']);
        ?>

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
            [
                'attribute'=>'resume',
                'format' => 'html',
                'value'=> "<a href='".Yii::$app->params['baseurl'].'/uploads/thumbs/chapter/images/'.$model->resume."' target='_blank' >Resume</a>",
            ],
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
            [
                'attribute'=>'help_event',
                'value' => ($model->help_event)? "Yes" : 'No'
            ],
            'activities_work:ntext',
            [
                'attribute'=>'how_involved',
                'value' => $model->getHowInvolve($model->how_involved)
            ],
            [
                'attribute'=>'experience_web',
                'value' => $model->getExperienceWebs($model->experience_web)
            ],
            'organization_affliation:ntext',
            'ideas_speaker:ntext',
            'biggest_challenge:ntext',
            'other_info:ntext',
            'how_involved_other',
            'created_at:date',
            'updated_at:date',
        ],
    ]) ?>


                </div>
            </div>
        </div>
    </div>
</div>

