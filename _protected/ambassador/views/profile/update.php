<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $role common\rbac\models\Role; */

$this->title = Yii::t('app', 'My Profile') . ': ';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profile'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="user-update">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                <div class="col-lg-5 well bs-component">
                    <h2>Basic Info</h2>
                    <?= $this->render('_form', [
                        'user' => $user,
                    ]) ?>

                </div>
                <div class="col-lg-6 well bs-component" style="margin-left:85px;">
                    <h2>Other Info</h2>
                    <?= $this->render('_ambassadorform', [
                        'model' => $profile,
                    ]) ?>

                </div>
                            </div>
            </div>
        </div>
    </div>
</div>

