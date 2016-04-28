<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AmbassadorProfile */

$this->title = Yii::t('app', 'Create Ambassador Profile');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ambassador Profiles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ambassador-profile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
