<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Animals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Animal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_ANIMAL',
            'COD_RACA',
            'DT_NASCIMENTO',
            'DT_FALECIMENTO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
