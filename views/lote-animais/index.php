<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lote Animais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lote-animais-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Incluir Lote Animais', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_LOTE_ANIMAIS',
            'COD_ANIMAL',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
