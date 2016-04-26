<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                <div class="pull-right">
                    <?= Html::a(Yii::t('app', 'Update Profile'), ['update', 'id' => $model->id], [
                        'class' => 'btn btn-primary']) ?>
                    <?= Html::a(Yii::t('app', 'Change Password'), ['change-password'], [
                        'class' => 'btn btn-primary']) ?>

                </div>

                </h1>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'username',
                        'email:email',
                        //'password_hash',
                        [
                            'attribute'=>'status',
                            'value' => $model->getStatusName(),
                        ],
                        //'auth_key',
                        //'password_reset_token',
                        //'account_activation_token',
                        'created_at:date',
                        'updated_at:date',
                    ],
                ]) ?>

            </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>

