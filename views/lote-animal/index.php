<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lote Animals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lote-animal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Incluir Lote Animal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_LOTE_ANIMAL',
            'DESCR',
            'COD_ANIMAL',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
