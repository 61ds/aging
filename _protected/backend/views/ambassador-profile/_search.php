<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AmbassadorProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ambassador-profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'country_code') ?>

    <?php // echo $form->field($model, 'area_code') ?>

    <?php // echo $form->field($model, 'phone_number') ?>

    <?php // echo $form->field($model, 'chapter') ?>

    <?php // echo $form->field($model, 'chapter_city') ?>

    <?php // echo $form->field($model, 'chapter_state') ?>

    <?php // echo $form->field($model, 'chapter_country') ?>

    <?php // echo $form->field($model, 'twitter_handle') ?>

    <?php // echo $form->field($model, 'chapter_email') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'street_address') ?>

    <?php // echo $form->field($model, 'address_city') ?>

    <?php // echo $form->field($model, 'address_state') ?>

    <?php // echo $form->field($model, 'address_country') ?>

    <?php // echo $form->field($model, 'address_zip') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'preferred_payment') ?>

    <?php // echo $form->field($model, 'account_name') ?>

    <?php // echo $form->field($model, 'bank_name') ?>

    <?php // echo $form->field($model, 'bank_account') ?>

    <?php // echo $form->field($model, 'aba_routing') ?>

    <?php // echo $form->field($model, 'bank_address') ?>

    <?php // echo $form->field($model, 'bank_street_address') ?>

    <?php // echo $form->field($model, 'bank_city') ?>

    <?php // echo $form->field($model, 'bank_state') ?>

    <?php // echo $form->field($model, 'bank_country') ?>

    <?php // echo $form->field($model, 'bank_zip') ?>

    <?php // echo $form->field($model, 'paypal_email') ?>

    <?php // echo $form->field($model, 'check_to') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'onboarding_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
