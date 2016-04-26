<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ChapterFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chapter Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="startup-form-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
    <p>
        <?= Html::a('Create Chapter Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'title',
            'organization',
            // 'email:email',
            // 'address',
            // 'street_address',
            // 'address_city',
            // 'address_state',
            // 'address_zip',
            // 'address_country',
            // 'phone',
            // 'personal_twitter',
            // 'work_twitter',
            // 'linkedin',
            // 'skype',
            // 'organization_website',
            // 'organization_descr:ntext',
            // 'personal_website',
            // 'summary_bio:ntext',
            // 'skills',
            // 'headshot',
            // 'resume',
            // 'events_attended:ntext',
            // 'chapter_city',
            // 'chapter_state',
            // 'chapter_country',
            // 'location_notes:ntext',
            // 'why_get_involved:ntext',
            // 'help_event',
            // 'activities_work:ntext',
            // 'how_involved',
            // 'experience_web',
            // 'organization_affliation:ntext',
            // 'ideas_speaker:ntext',
            // 'biggest_challenge:ntext',
            // 'other_info:ntext',
            // 'how_involved_other',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Actions',
                'template' => '{view}',

                'contentOptions' => ['style' => 'width:160px;letter-spacing:10px;text-align:center'],
            ],
        ],
    ]); ?>

</div>
</div>
</div>
</div>
</div>
