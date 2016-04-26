<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $role common\rbac\models\Role; */

$this->title = Yii::t('app', 'Change Password') . ': ' ;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profile'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Change Paassword');
?>
<div class="user-update">

    <div class="col-lg-5 well bs-component">

        <?= $this->render('_passform', [
            'user' => $user,
        ]) ?>

    </div>

</div>
