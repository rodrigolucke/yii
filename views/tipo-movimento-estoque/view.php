<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TipoMovimentoEstoque */

$this->title = $model->COD_TIPO_MOVIMENTO_ESTOQUE;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Movimento Estoques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-movimento-estoque-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->COD_TIPO_MOVIMENTO_ESTOQUE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->COD_TIPO_MOVIMENTO_ESTOQUE], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'COD_TIPO_MOVIMENTO_ESTOQUE',
            'DESCR',
        ],
    ]) ?>

</div>
