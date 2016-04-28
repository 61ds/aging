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
                <div class="pull-left">
                    <?= Html::a(Yii::t('app', 'Update Profile'), ['update', 'id' => $model->id], [
                        'class' => 'btn btn-primary']) ?>
                    <?= Html::a(Yii::t('app', 'Change Password'), ['change-password'], [
                        'class' => 'btn btn-primary']) ?>

                </div>
                <div class="clearfix"></div>
                <h2>Personal Details</h2>

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
                    ],
                ]) ?>
                <?php
                if($board){ ?>

                    <?= DetailView::widget([
                        'model' => $board,
                        'attributes' => [
                            'first_name',
                            'last_name',
                            'email:email',
                            [
                                'label'=>'Phone',
                                'attribute'=>'chapter_city',
                                'value'=> $board->country_code.'-'.$board->area_code.'-'.$board->phone_number,
                            ],
                            [
                                'attribute'=>'chapter_city',
                                'value'=>$board->addressCity->name,
                            ],
                            [
                                'attribute'=>'chapter_state',
                                'value'=>$board->addressState->name,
                            ],
                            [
                                'attribute'=>'chapter_country',
                                'value'=>$board->addressCountry->name,
                            ],
                            [
                                'attribute'=>'chapter',
                                'value'=>$board->chapter0->name,
                            ],
                            'chapter_email:email',
                            'notes:ntext',
                            [
                                'attribute'=>'file',
                                'format' => 'html',
                                'value'=> Html::img(Yii::$app->params['baseurl'].'/uploads/thumbs/onborading/images/'.$board->file),
                            ],

                        ],
                    ]) ?>

                    <?php if($board->preferred_payment == 3){
                        ?>
                        <div class="clearfix"></div>
                        <h2>Paypal Payment Method Details</h2>
                        <?= DetailView::widget([
                            'model' => $board,
                            'attributes' => [
                                'paypal_email',
                            ],
                        ]) ?>
                        <?php
                    } ?>

                    <?php if($board->preferred_payment == 1){
                        ?>
                        <div class="clearfix"></div>
                        <h2>Payment by Check Method Details</h2>
                        <?= DetailView::widget([
                            'model' => $board,
                            'attributes' => [
                                'check_to',
                                'bank_address',
                                'bank_street_address',
                                'bank_zip',
                                [
                                    'attribute'=>'bank_city',
                                    'value'=>$board->bankCity->name,
                                ],
                                [
                                    'attribute'=>'bank_state',
                                    'value'=>$board->bankState->name,
                                ],
                                [
                                    'attribute'=>'bank_country',
                                    'value'=>$board->bankCountry->name,
                                ],
                            ],
                        ]) ?>
                        <?php
                    } ?>

                    <?php if($board->preferred_payment == 2){
                        ?>
                        <div class="clearfix"></div>
                        <h2>Electronic bank transfer Method Details</h2>
                        <?= DetailView::widget([
                            'model' => $board,
                            'attributes' => [
                                'account_name',
                                'bank_name',
                                'bank_account',
                                'aba_routing',
                                'bank_address',
                                'bank_street_address',
                                'bank_zip',
                                [
                                    'attribute'=>'bank_city',
                                    'value'=>$board->bankCity->name,
                                ],
                                [
                                    'attribute'=>'bank_state',
                                    'value'=>$board->bankState->name,
                                ],
                                [
                                    'attribute'=>'bank_country',
                                    'value'=>$board->bankCountry->name,
                                ],
                            ],
                        ]) ?>
                        <?php
                    } ?>



            <?php   }
            ?>
            </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>

