<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChapterFormSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chapter-form-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'organization') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'street_address') ?>

    <?php // echo $form->field($model, 'address_city') ?>

    <?php // echo $form->field($model, 'address_state') ?>

    <?php // echo $form->field($model, 'address_zip') ?>

    <?php // echo $form->field($model, 'address_country') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'personal_twitter') ?>

    <?php // echo $form->field($model, 'work_twitter') ?>

    <?php // echo $form->field($model, 'linkedin') ?>

    <?php // echo $form->field($model, 'skype') ?>

    <?php // echo $form->field($model, 'organization_website') ?>

    <?php // echo $form->field($model, 'organization_descr') ?>

    <?php // echo $form->field($model, 'personal_website') ?>

    <?php // echo $form->field($model, 'summary_bio') ?>

    <?php // echo $form->field($model, 'skills') ?>

    <?php // echo $form->field($model, 'headshot') ?>

    <?php // echo $form->field($model, 'resume') ?>

    <?php // echo $form->field($model, 'events_attended') ?>

    <?php // echo $form->field($model, 'chapter_city') ?>

    <?php // echo $form->field($model, 'chapter_state') ?>

    <?php // echo $form->field($model, 'chapter_country') ?>

    <?php // echo $form->field($model, 'location_notes') ?>

    <?php // echo $form->field($model, 'why_get_involved') ?>

    <?php // echo $form->field($model, 'help_event') ?>

    <?php // echo $form->field($model, 'activities_work') ?>

    <?php // echo $form->field($model, 'how_involved') ?>

    <?php // echo $form->field($model, 'experience_web') ?>

    <?php // echo $form->field($model, 'organization_affliation') ?>

    <?php // echo $form->field($model, 'ideas_speaker') ?>

    <?php // echo $form->field($model, 'biggest_challenge') ?>

    <?php // echo $form->field($model, 'other_info') ?>

    <?php // echo $form->field($model, 'how_involved_other') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
