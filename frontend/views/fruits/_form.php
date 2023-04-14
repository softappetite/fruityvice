<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Fruits $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="fruits-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fruit_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nut_calories')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nut_fat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nut_sugar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nut_carbohydrates')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nut_protein')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
