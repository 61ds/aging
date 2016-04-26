<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AmbsOnboarding */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="startup-form-form">
    <div class="col-lg-12 ">

        <div class="row">



            <div class="col-lg-12 well bs-component">

                <h1> Aging2.0 Chapter Onboarding</h1>
                <p>Congratulations on being approved to run an Aging2.0 Chapter! Please complete this form which includes the License Agreement and financial information so that we can ensure that you receive Chapter revenues. Please review the Chapter rules here: http://j.mp/a2chapter-groundrules</p>
            </div>
    <div class="col-lg-12 well bs-component">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
        <h2>1. Ambassador information</h2>
        <hr/>
    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_code')->textInput() ?>

    <?= $form->field($model, 'area_code')->textInput() ?>

    <?= $form->field($model, 'phone_number')->textInput() ?>
        <h2>2. Chapter information</h2>
        <hr/>
    <?= $form->field($model, 'chapter')->textInput() ?>

    <?= $form->field($model, 'chapter_country')->dropDownList(
        $model->countries,
        [
            'prompt'=>'- Select Country -',
            'class'=>'form-control select2',
            'id'=>'chapter_country',
            'onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('startup/active-states?id=').'"+$(this).val(), function( data ) {
                                $( "select#chapter_state" ).empty();
                                $( "select#chapter_city" ).html(data.cities);
                                $( "select#chapter_state" ).html( data.states );
                            });'

        ]
    )->label(false)
    ?>

    <?= $form->field($model, 'chapter_state')->dropDownList(
        array(),
        [
            'prompt'=>'- Select State -',
            'class'=>'form-control select2',
            'id'=>'chapter_state',
            'onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('startup/active-cities?id=').'"+$(this).val(), function( data ) {
                                $( "select#chapter_city" ).empty();
                                $( "select#chapter_city" ).html( data );
                            });'
        ]
    )->label(false)
    ?>
    <?= $form->field($model, 'chapter_city')->dropDownList(
        array(),
        [
            'prompt'=>'- Select City -',
            'class'=>'form-control select2',
            'id'=>'chapter_city',
        ]
    )->label(false)
    ?>

    <?= $form->field($model, 'twitter_handle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chapter_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street_address')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'address_country')->dropDownList(
        $model->countries,
        [
            'prompt'=>'- Select Country -',
            'class'=>'form-control select2',
            'id'=>'address_country',
            'onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('startup/active-states?id=').'"+$(this).val(), function( data ) {
                                $( "select#address_state" ).empty();
                                $( "select#address_city" ).html(data.cities);
                                $( "select#address_state" ).html( data.states );
                            });'

        ]
    )->label(false)
    ?>

    <?= $form->field($model, 'address_state')->dropDownList(
        array(),
        [
            'prompt'=>'- Select State -',
            'class'=>'form-control select2',
            'id'=>'address_state',
            'onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('startup/active-cities?id=').'"+$(this).val(), function( data ) {
                                $( "select#address_city" ).empty();
                                $( "select#address_city" ).html( data );
                            });'
        ]
    )->label(false)
    ?>
    <?= $form->field($model, 'address_city')->dropDownList(
        array(),
        [
            'prompt'=>'- Select City -',
            'class'=>'form-control select2',
            'id'=>'address_city',
        ]
    )->label(false)
    ?>


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
    <?= $form->field($model, 'bank_country')->dropDownList(
        $model->countries,
        [
            'prompt'=>'- Select Country -',
            'class'=>'form-control select2',
            'id'=>'bank_country',
            'onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('startup/active-states?id=').'"+$(this).val(), function( data ) {
                                $( "select#bank_state" ).empty();
                                $( "select#bank_city" ).html(data.cities);
                                $( "select#bank_state" ).html( data.states );
                            });'

        ]
    )->label(false)
    ?>

    <?= $form->field($model, 'bank_state')->dropDownList(
        array(),
        [
            'prompt'=>'- Select State -',
            'class'=>'form-control select2',
            'id'=>'bank_state',
            'onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('startup/active-cities?id=').'"+$(this).val(), function( data ) {
                                $( "select#bank_city" ).empty();
                                $( "select#bank_city" ).html( data );
                            });'
        ]
    )->label(false)
    ?>
    <?= $form->field($model, 'bank_city')->dropDownList(
        array(),
        [
            'prompt'=>'- Select City -',
            'class'=>'form-control select2',
            'id'=>'bank_city',
        ]
    )->label(false)
    ?>

    <?= $form->field($model, 'bank_zip')->textInput() ?>

    <?= $form->field($model, 'paypal_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'check_to')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

        </div>
      </div>
  </div>
</div>
<style>label {
        width: 100%;
    }</style>
