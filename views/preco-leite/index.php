<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Preco Leite';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preco-leite-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Incluir Preco Leite', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_PRECO_LEITE',
            'PRECO_LITRO',
            'DT_ATUALIZACAO',
            'COD_USUARIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
