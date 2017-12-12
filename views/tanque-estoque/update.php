<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TanqueEstoque */

$this->title = 'Update Tanque Estoque: ' . $model->SEQ_TANQUE_ESTOQUE;
$this->params['breadcrumbs'][] = ['label' => 'Tanque Estoques', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SEQ_TANQUE_ESTOQUE, 'url' => ['view', 'id' => $model->SEQ_TANQUE_ESTOQUE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tanque-estoque-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
