<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MovimentoEstoque */

$this->title = $model->COD_MOVIMENTO_ESTOQUE;
$this->params['breadcrumbs'][] = ['label' => 'Movimento Estoques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimento-estoque-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->COD_MOVIMENTO_ESTOQUE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->COD_MOVIMENTO_ESTOQUE], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja deletar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'COD_MOVIMENTO_ESTOQUE',
            'TIPO_MOVIMENTO',
            'DATA_HISTORICO',
            'COD_ESTOQUE',
        ],
    ]) ?>

</div>
