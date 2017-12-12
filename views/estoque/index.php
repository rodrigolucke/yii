<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estoques';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estoque-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Estoque', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_ESTOQUE',
            'COD_TANQUE',
            'RESERVADO',
            'LOCALIZACAO',
            'GORDURA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
