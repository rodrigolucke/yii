<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perfil Pessoas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-pessoa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Incluir Perfil Pessoa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SEQ_PERFIL_PESSOA',
            'COD_PERFIL',
            'COD_PESSOA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
