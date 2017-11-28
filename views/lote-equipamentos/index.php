<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lote Equipamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lote-equipamentos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lote Equipamentos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_LOTE',
            'COD_EQUIPAMENTO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
