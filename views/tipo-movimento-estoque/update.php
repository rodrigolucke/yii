<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoMovimentoEstoque */

$this->title = 'Update Tipo Movimento Estoque: ' . $model->COD_TIPO_MOVIMENTO_ESTOQUE;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Movimento Estoques', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_TIPO_MOVIMENTO_ESTOQUE, 'url' => ['view', 'id' => $model->COD_TIPO_MOVIMENTO_ESTOQUE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-movimento-estoque-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
