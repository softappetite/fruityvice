<?php

use common\models\Fruits;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\FruitsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'My Fvourite Fruits List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fruits-index">

    <h1><?= Html::encode($this->title) ?></h1>

  
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          /*  ['class' => 'yii\grid\SerialColumn'],*/

           /* 'id',*/
            'fruit_id',
            'name',
            'family',
            'order',
            'genus',
            'nut_calories',
            'nut_fat',
            'nut_sugar',
            'nut_carbohydrates',
            'nut_protein',
		
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
