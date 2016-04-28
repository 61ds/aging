<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $role common\rbac\models\Role */
use yii\helpers\Html;
use yii\widgets\DetailView;
$this->title = Yii::t('app', 'Create New Ambassador Account');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <div class="col-lg-5 well bs-component">
                        <?= $this->render('_form-ambassador', [
                            'user' => $user,
                            'role' => $role,
                        ]) ?>
                    </div>
                    <div class="col-lg-1">
                    </div>
                    <?php
                    if($board){ ?>
                        <div class="col-lg-6 well bs-component">
                            <?= DetailView::widget([
                                'model' => $board,
                                'attributes' => [
                                    'first_name',
                                    'last_name',
                                    'email:email',
                                    'country_code',
                                    'area_code',
                                    'phone_number',
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

                        </div>
                    <?php   }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

