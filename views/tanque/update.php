<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tanque */

$this->title = 'Update Tanque: ' . $model->COD_TANQUE;
$this->params['breadcrumbs'][] = ['label' => 'Tanques', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_TANQUE, 'url' => ['view', 'id' => $model->COD_TANQUE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tanque-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
