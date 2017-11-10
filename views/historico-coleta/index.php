<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Historico Coletas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historico-coleta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Incluir Historico Coleta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_HISTORICO_COLETA',
            'DATA_COLETA',
            'QUANTIDADE_COLETA',
            'STATUS',
            'COD_USUARIO',
            // 'COD_LOTE_ANIMAL',
            // 'COD_LOTE_EQUIPAMENTO',
            // 'COD_MOVIMENTO_ESTOQUE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
