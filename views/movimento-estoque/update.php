<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MovimentoEstoque */

$this->title = 'Editar Movimento Estoque: ' . $model->COD_MOVIMENTO_ESTOQUE;
$this->params['breadcrumbs'][] = ['label' => 'Movimento Estoques', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_MOVIMENTO_ESTOQUE, 'url' => ['view', 'id' => $model->COD_MOVIMENTO_ESTOQUE]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="movimento-estoque-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
