<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'value' => 'Aging2.0 Global Startup Search']) ?>

    <?= $form->field($model, 'country_id')->dropDownList(
        $model->countries,
        [
            'prompt'=>'- Select Country -',
            'class'=>'form-control select2',
            'onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('countries/active-states?id=').'"+$(this).val(), function( data ) {
                $( "select.stateid" ).html( data.states );
                $( "select.cityid" ).html( data.cities );
            });'
        ]
    ) ?>
    <?= $form->field($model, 'state_id')->dropDownList(
        $model->isNewRecord ? array() : $states,
        [
            'prompt'=>'- Select State -',
            'class'=>'form-control select2 stateid',
            'onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('countries/active-cities?id=').'"+$(this).val(), function( data ) {
                                  $( "select.cityid" ).html( data );
                                });'

        ]
    ) ?>

    <?= $form->field($model, 'city_id')->dropDownList(
        $model->isNewRecord ? array() : $cities,
        [
            'prompt'=>'- Select City -',
            'class'=>'form-control select2 cityid',
        ]
    ) ?>

    <?= $form->field($model, 'event_date')->widget(\yii\jui\DatePicker::classname(), [
        'options' =>['class'=> 'form-control'],
        //'language' => 'ru',
        //'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'event_end_date')->widget(\yii\jui\DatePicker::classname(), [
        'options' =>['class'=> 'form-control'],
        //'language' => 'ru',
        //'dateFormat' => 'yyyy-MM-dd',
    ])->label('Event End Date (Optional)') ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
