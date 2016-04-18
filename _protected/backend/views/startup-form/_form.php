<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StartupForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="startup-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_city')->textInput() ?>

    <?= $form->field($model, 'address_state')->textInput() ?>

    <?= $form->field($model, 'descr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'angel_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stage')->textInput() ?>

    <?= $form->field($model, 'summary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput() ?>

    <?= $form->field($model, 'category_other')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category_choice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'target_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'competitors')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'capital_raised')->textInput() ?>

    <?= $form->field($model, 'revenue')->textInput() ?>

    <?= $form->field($model, 'strategic_priority')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'like_to_apply')->textInput() ?>

    <?= $form->field($model, 'first_choice')->textInput() ?>

    <?= $form->field($model, 'second_choice')->textInput() ?>

    <?= $form->field($model, 'third_choice')->textInput() ?>

    <?= $form->field($model, 'like_to_host')->textInput() ?>

    <?= $form->field($model, 'pitch_events')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pitch_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pitch_winner')->textInput() ?>

    <?= $form->field($model, 'why_pitch')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'newsletter')->textInput() ?>

    <?= $form->field($model, 'hear')->textInput() ?>

    <?= $form->field($model, 'hear_other')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'technology')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
