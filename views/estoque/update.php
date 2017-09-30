<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Estoque */

$this->title = 'Update Estoque: ' . $model->COD_ESTOQUE;
$this->params['breadcrumbs'][] = ['label' => 'Estoques', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_ESTOQUE, 'url' => ['view', 'id' => $model->COD_ESTOQUE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estoque-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
