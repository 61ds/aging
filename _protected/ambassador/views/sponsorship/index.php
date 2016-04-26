<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SponsorshipFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sponsorship Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsorship-form-index">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">

                    <?php Pjax::begin(); ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn',
                                'header' => 'S.No.'],

                            'organization',
                            'first_name',
                            'last_name',
                            'title',
                            // 'email:email',
                            // 'phone_country_code',
                            // 'phone_area_code',
                            // 'phone_number',
                            // 'address',
                            // 'street_address',
                            // 'address_city',
                            // 'address_state',
                            // 'address_country',
                            // 'address_zip',
                            // 'logo',
                            // 'website',
                            // 'twitter',
                            // 'facebook',
                            // 'summary:ntext',
                            // 'sponsoring',
                            // 'agreed_amount',
                            // 'event_date',
                            // 'notes:ntext',
                            // 'preferred_payment',
                            // 'created_at',
                            // 'updated_at',
                            // 'sponsoring_other',

                            [
                                'class' => 'yii\grid\ActionColumn','header'=>'Actions',
                                'template' => '{view}',
                                'contentOptions' => ['style' => 'width:160px;letter-spacing:10px;text-align:center'],
                            ],
                        ],
                    ]); ?>
                    <?php Pjax::end(); ?>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>



