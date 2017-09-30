<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venda-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Venda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_VENDA',
            'COD_EMPRESA',
            'PRECO_LITRO',
            'QUANTIDADE',
            'DT_VENDA',
            // 'COD_MOVIMENTO_ESTOQUE',
            // 'COD_PRECO_LEITE',
            // 'COD_USUARIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
