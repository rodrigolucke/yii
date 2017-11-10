<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HistoricoColeta */

$this->title = $model->COD_HISTORICO_COLETA;
$this->params['breadcrumbs'][] = ['label' => 'Historico Coletas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historico-coleta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->COD_HISTORICO_COLETA], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->COD_HISTORICO_COLETA], [
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
            'COD_HISTORICO_COLETA',
            'DATA_COLETA',
            'QUANTIDADE_COLETA',
            'STATUS',
            'COD_USUARIO',
            'COD_LOTE_ANIMAL',
            'COD_LOTE_EQUIPAMENTO',
            'COD_MOVIMENTO_ESTOQUE',
        ],
    ]) ?>

</div>
