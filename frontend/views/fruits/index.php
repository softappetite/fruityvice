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

$this->title = 'Fruits List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fruits-index">

    <h1><?= Html::encode($this->title) ?></h1>

   <?php /*?> <p>
        <?= Html::a('Create Fruits', ['create'], ['class' => 'btn btn-success']) ?>
    </p><?php */?>

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
			[
            'header' => 'Favourite',
            'content' => function($model) {
                return Html::a('Add to Favourite', ['fruits/add-favourite','id'=>$model->id], ['class' => 'btn btn-success btn-xs', 'data-pjax' =>1]);
            }           
],
			
            [
                'class' => ActionColumn::className(),
				'template' => '{delete}',
                'urlCreator' => function ($action, Fruits $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
