<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StartupFormSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="startup-form-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'job_title') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'linkedin') ?>

    <?php // echo $form->field($model, 'twitter') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'street_address') ?>

    <?php // echo $form->field($model, 'address_city') ?>

    <?php // echo $form->field($model, 'address_state') ?>

    <?php // echo $form->field($model, 'descr') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'angel_list') ?>

    <?php // echo $form->field($model, 'stage') ?>

    <?php // echo $form->field($model, 'summary') ?>

    <?php // echo $form->field($model, 'video') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'category_other') ?>

    <?php // echo $form->field($model, 'category_choice') ?>

    <?php // echo $form->field($model, 'target_customer') ?>

    <?php // echo $form->field($model, 'business_model') ?>

    <?php // echo $form->field($model, 'competitors') ?>

    <?php // echo $form->field($model, 'capital_raised') ?>

    <?php // echo $form->field($model, 'revenue') ?>

    <?php // echo $form->field($model, 'strategic_priority') ?>

    <?php // echo $form->field($model, 'like_to_apply') ?>

    <?php // echo $form->field($model, 'first_choice') ?>

    <?php // echo $form->field($model, 'second_choice') ?>

    <?php // echo $form->field($model, 'third_choice') ?>

    <?php // echo $form->field($model, 'like_to_host') ?>

    <?php // echo $form->field($model, 'pitch_events') ?>

    <?php // echo $form->field($model, 'pitch_city') ?>

    <?php // echo $form->field($model, 'pitch_winner') ?>

    <?php // echo $form->field($model, 'why_pitch') ?>

    <?php // echo $form->field($model, 'newsletter') ?>

    <?php // echo $form->field($model, 'hear') ?>

    <?php // echo $form->field($model, 'hear_other') ?>

    <?php // echo $form->field($model, 'technology') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
