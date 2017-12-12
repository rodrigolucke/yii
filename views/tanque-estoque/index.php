<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tanque Estoques';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanque-estoque-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tanque Estoque', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SEQ_TANQUE_ESTOQUE',
            'COD_ESTOQUE',
            'COD_TANQUE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
