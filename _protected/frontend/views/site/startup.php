<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

$this->registerJs("
	$('#characterLeft').text('25 words left');
	$('#descr').keyup(function () {
	    var len = $(this).val().split(' ').length;
	    var count = $(this).val().length;
		var max = 3;
		if (len > max) {
		    $(this).val( $(this).val().substring(0, count-1));
			$('#characterLeft').text(' you have reached the limit');
		} else {
			var ch = max - len;

			$('#characterLeft').text(ch + ' words left');
		}
	});
");

?>

<div class="startup-form-form">
    <div class="col-lg-12 ">

        <div class="row">
            <div class="col-lg-12 well bs-component">
                <h1>Startup Submission</h1>
                <p>
                    Please fill out this form to submit your company into the Aging2.0 Startup Database.
                    Aging2.0 will use this this information to better understand your startup and to connect
                    you with opportunities across the Aging2.0 network (corporate partner introductions, conference panels,
                    press mentions, investor introductions, events, etc.). This is also the entry form for
                    Aging2.0's 2016 Global Startup Search.
                </p>
                <p>
                    All information will by default be kept within Aging2.0 but please do not submit anything here you wouldn't feel
                    comfortable sharing among customers and partners. Please continue to follow Aging2.0 through our newsletter (<a href="www.aging2.com/join" target="_blank">www.aging2.com/join</a>).
                </p>
                <p>
                    Questions? Contact <a href="mailto:michelle@aging2.com">michelle@aging2.com</a>.
                </p>
            </div>

            <div class="col-lg-12 well bs-component">
                <?php $form = ActiveForm::begin(); ?>
                    <h2>Personal Information </h2>

                    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

                     <?= $form->field($model, 'job_title')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'twitter')->textInput(['placeholder'=>'@Aging20','maxlength' => true]) ?>

                    <h2>Startup Information</h2>

                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'address')->textInput(['placeholder'=>'Street address','maxlength' => true]) ?>

                    <?= $form->field($model, 'street_address')->textInput(['placeholder'=>'Street address 2','maxlength' => true])->label(false) ?>

                    <?= $form->field($model, 'address_zip')->textInput(['placeholder'=>'Postal / Zip Code ','maxlength' => true])->label(false) ?>

                    <?= $form->field($model, 'address_country')->dropDownList(
                        $model->countries,
                        [
                            'prompt'=>'- Select Country -',
                            'class'=>'form-control select2',
                            'id'=>'country',
                            'onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('countries/active-states?id=').'"+$(this).val(), function( data ) {
                                $( "select#state" ).empty();
                                $( "select#city" ).html(data.cities);
                                $( "select#state" ).html( data.states );
                            });'

                        ]
                    )->label(false)
                    ?>
                    <?= $form->field($model, 'address_state')->dropDownList(
                        array(),
                        [
                            'prompt'=>'- Select State -',
                            'class'=>'form-control select2',
                            'id'=>'state',
                            'onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('countries/active-cities?id=').'"+$(this).val(), function( data ) {
                                $( "select#city" ).empty();
                                $( "select#city" ).html( data );
                            });'
                        ]
                    )->label(false)
                    ?>
                    <?= $form->field($model, 'address_city')->dropDownList(
                        array(),
                        [
                            'prompt'=>'- Select City -',
                            'class'=>'form-control select2',
                            'id'=>'city',
                        ]
                    )->label(false)
                    ?>

                    <?= $form->field($model, 'descr',
                        ['template' => '{label}{input}<div id="characterLeft"></div>{error}'])->textarea(['id'=>'descr','rows' => 6]) ?>


                    <?= $form->field($model, 'logo')->widget(FileInput::classname(),
                        [
                            'options' => ['accept' => 'image/*', 'value' => $model->logo],
                            'pluginOptions' => [
                                'showCaption' => false,
                                'showRemove' => false,
                                'showUpload' => false,
                            ]
                        ]);
                    ?>

                    <?= $form->field($model, 'angel_list')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'stage')->dropDownList(
                        $model->stages,
                        [
                            'prompt'=>'- Select Company Stages -',
                            'class'=>'form-control select2',
                        ]
                    )
                    ?>

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

                    <h2>2016 Global Startup Search</h2>

                    <?= $form->field($model, 'like_to_apply')->textInput() ?>

                    <?= $form->field($model, 'first_choice')->textInput() ?>

                    <?= $form->field($model, 'second_choice')->textInput() ?>

                    <?= $form->field($model, 'third_choice')->textInput() ?>

                    <?= $form->field($model, 'like_to_host')->textInput() ?>

                    <?= $form->field($model, 'pitch_events')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'pitch_city')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'pitch_winner')->textInput() ?>

                    <?= $form->field($model, 'why_pitch')->textarea(['rows' => 6]) ?>

                    <h2>Additional Opportunities</h2>

                    <?= $form->field($model, 'newsletter')->textInput() ?>

                    <?= $form->field($model, 'hear')->textInput() ?>

                    <?= $form->field($model, 'hear_other')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'technology')->textInput(['maxlength' => true]) ?>

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

            <?php ActiveForm::end(); ?>
        </div>
        </div>
    </div>
</div>
