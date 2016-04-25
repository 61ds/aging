<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SponsorshipFormSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sponsorship-form-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'organization') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'phone_country_code') ?>

    <?php // echo $form->field($model, 'phone_area_code') ?>

    <?php // echo $form->field($model, 'phone_number') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'street_address') ?>

    <?php // echo $form->field($model, 'address_city') ?>

    <?php // echo $form->field($model, 'address_state') ?>

    <?php // echo $form->field($model, 'address_country') ?>

    <?php // echo $form->field($model, 'address_zip') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'twitter') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'summary') ?>

    <?php // echo $form->field($model, 'sponsoring') ?>

    <?php // echo $form->field($model, 'agreed_amount') ?>

    <?php // echo $form->field($model, 'event_date') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'preferred_payment') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'sponsoring_other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
