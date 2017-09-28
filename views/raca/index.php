<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Racas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raca-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Raca', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_RACA',
            'DESCR',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
