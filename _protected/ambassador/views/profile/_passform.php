<?php
use nenad\passwordStrength\PasswordInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $form yii\widgets\ActiveForm */
/* @var $role common\rbac\models\Role; */
?>
<div class="user-form">
    <?= DetailView::widget([
        'model' => $user,
        'attributes' => [
            'username',
            'email:email',

        ],
    ]) ?>
    <?php $form = ActiveForm::begin(['id' => 'form-user']); ?>


        <?php if ($user->scenario === 'create'): ?>
            <?= $form->field($user, 'password')->widget(PasswordInput::classname(), []) ?>
        <?php else: ?>
            <?= $form->field($user, 'password')->widget(PasswordInput::classname(), [])
                     ->passwordInput(['placeholder' => Yii::t('app', 'New pwd ( if you want to change it )')]) 
            ?>       
        <?php endif ?>

    <div class="form-group">     
        <?= Html::submitButton($user->isNewRecord ? Yii::t('app', 'Create') 
            : Yii::t('app', 'Update'), ['class' => $user->isNewRecord 
            ? 'btn btn-success' : 'btn btn-primary']) ?>

        <?= Html::a(Yii::t('app', 'Cancel'), ['profile/index'], ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
 
</div>
