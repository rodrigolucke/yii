<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Raca */

$this->title = 'Update Raca: ' . $model->COD_RACA;
$this->params['breadcrumbs'][] = ['label' => 'Racas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_RACA, 'url' => ['view', 'id' => $model->COD_RACA]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="raca-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
