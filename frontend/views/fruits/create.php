<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Fruits $model */

$this->title = 'Create Fruits';
$this->params['breadcrumbs'][] = ['label' => 'Fruits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fruits-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
