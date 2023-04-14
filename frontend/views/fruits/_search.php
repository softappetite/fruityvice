<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\FruitsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="fruits-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fruit_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'family') ?>

    <?= $form->field($model, 'order') ?>

    <?php // echo $form->field($model, 'genus') ?>

    <?php // echo $form->field($model, 'nut_calories') ?>

    <?php // echo $form->field($model, 'nut_fat') ?>

    <?php // echo $form->field($model, 'nut_sugar') ?>

    <?php // echo $form->field($model, 'nut_carbohydrates') ?>

    <?php // echo $form->field($model, 'nut_protein') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
