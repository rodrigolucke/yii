<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perfil Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perfil Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SEQ_PERFIL_MENU',
            'COD_PERFIL',
            'COD_MENU',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
