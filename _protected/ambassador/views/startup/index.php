<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\StartupFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Startup Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="startup-form-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Startup Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'job_title',
            'email:email',
            // 'phone',
            // 'linkedin',
            // 'twitter',
            // 'name',
            // 'website',
            // 'address',
            // 'street_address',
            // 'address_zip',
            // 'address_city',
            // 'address_state',
            // 'address_country',
            // 'descr:ntext',
            // 'logo',
            // 'angel_list',
            // 'stage',
            // 'summary',
            // 'video',
            // 'category',
            // 'category_other:ntext',
            // 'category_choice',
            // 'target_customer',
            // 'business_model',
            // 'competitors:ntext',
            // 'capital_raised',
            // 'revenue',
            // 'strategic_priority',
            // 'like_to_apply',
            // 'first_choice',
            // 'second_choice',
            // 'third_choice',
            // 'like_to_host',
            // 'pitch_events',
            // 'pitch_city',
            // 'pitch_winner',
            // 'why_pitch:ntext',
            // 'newsletter',
            // 'interested_in_joining',
            // 'hear',
            // 'hear_other:ntext',
            // 'technology',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
