<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CompanyCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'isdescription')->dropDownList(
        [0 => 'No',1 => 'Yes'],
        [ 'class'=>'form-control select2' ]
    );
    ?>
    <?php
    echo $form->field($model, 'has_choices')->dropDownList(
        [1 => 'Yes',0 => 'No'],
        [ 'class'=>'form-control select2' ]
    );
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
