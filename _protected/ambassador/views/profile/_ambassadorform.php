<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $form yii\widgets\ActiveForm */
/* @var $role common\rbac\models\Role; */
?>


<div class="user-form">

<?php $form = ActiveForm::begin(['action'=>'update-profile','options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
<h4>Phone Number</h4>
<hr>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <?= $form->field($model, 'country_code')->textInput() ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <?= $form->field($model, 'area_code')->textInput() ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <?= $form->field($model, 'phone_number')->textInput() ?>
    </div>
</div>


<hr/>

<?= $form->field($model, 'twitter_handle')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'chapter_email')->textInput(['maxlength' => true]) ?>

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
</div>
