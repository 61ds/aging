<?php

use common\models\Menu;
use kartik\tree\TreeView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<?php 

	// VIEW - views/product/index.php
	echo TreeView::widget([
		// single query fetch to render the tree
		// use the Product model you have in the previous step
		'query' => Menu::find()->addOrderBy('root, lft'), 
		'headingOptions' => ['label' => 'Categories'],
		'fontAwesome' => false,     // optional
		'isAdmin' => true,         // optional (toggle to enable admin mode)
		'displayValue' => 1,        // initial display value
		'softDelete' => true,       // defaults to true
		'cacheSettings' => [        
			'enableCache' => true   // defaults to true
		],
		'nodeAddlViews' => [
		\kartik\tree\Module::VIEW_PART_2 => '@app/modules/admin/views/menu/custom' // set a path accessible
	]
	]);

	?>


</div>
