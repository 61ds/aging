<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChapterForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chapter-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_city')->textInput() ?>

    <?= $form->field($model, 'address_state')->textInput() ?>

    <?= $form->field($model, 'address_zip')->textInput() ?>

    <?= $form->field($model, 'address_country')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'personal_twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_descr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'personal_website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'summary_bio')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'skills')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'headshot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'events_attended')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'chapter_city')->textInput() ?>

    <?= $form->field($model, 'chapter_state')->textInput() ?>

    <?= $form->field($model, 'chapter_country')->textInput() ?>

    <?= $form->field($model, 'location_notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'why_get_involved')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'help_event')->textInput() ?>

    <?= $form->field($model, 'activities_work')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'how_involved')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'experience_web')->textInput() ?>

    <?= $form->field($model, 'organization_affliation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ideas_speaker')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'biggest_challenge')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'other_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'how_involved_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
