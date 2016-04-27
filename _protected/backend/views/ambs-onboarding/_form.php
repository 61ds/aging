<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AmbsOnboarding */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ambs-onboarding-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_code')->textInput() ?>

    <?= $form->field($model, 'area_code')->textInput() ?>

    <?= $form->field($model, 'phone_number')->textInput() ?>

    <?= $form->field($model, 'chapter')->textInput() ?>

    <?= $form->field($model, 'chapter_city')->textInput() ?>

    <?= $form->field($model, 'chapter_state')->textInput() ?>

    <?= $form->field($model, 'chapter_country')->textInput() ?>

    <?= $form->field($model, 'twitter_handle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chapter_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_city')->textInput() ?>

    <?= $form->field($model, 'address_state')->textInput() ?>

    <?= $form->field($model, 'address_country')->textInput() ?>

    <?= $form->field($model, 'address_zip')->textInput() ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'preferred_payment')->textInput() ?>

    <?= $form->field($model, 'account_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aba_routing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_street_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_city')->textInput() ?>

    <?= $form->field($model, 'bank_state')->textInput() ?>

    <?= $form->field($model, 'bank_country')->textInput() ?>

    <?= $form->field($model, 'bank_zip')->textInput() ?>

    <?= $form->field($model, 'paypal_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'check_to')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
