<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SponsorshipForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sponsorship-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'organization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_country_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_area_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_city')->textInput() ?>

    <?= $form->field($model, 'address_state')->textInput() ?>

    <?= $form->field($model, 'address_country')->textInput() ?>

    <?= $form->field($model, 'address_zip')->textInput() ?>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'summary')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sponsoring')->textInput() ?>

    <?= $form->field($model, 'agreed_amount')->textInput() ?>

    <?= $form->field($model, 'event_date')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'preferred_payment')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'sponsoring_other')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
