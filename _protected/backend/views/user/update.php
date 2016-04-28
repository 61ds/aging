<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $role common\rbac\models\Role; */

$this->title = Yii::t('app', 'Update User') . ': ' . $user->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $user->username, 'url' => ['view', 'id' => $user->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>


    <div class="col-lg-5 well bs-component">

        <?= $this->render('_form', [
            'user' => $user,
            'role' => $role,
        ]) ?>

    </div>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $(".field-role-item_name").remove();
</script>