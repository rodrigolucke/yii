<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TanqueEstoque */

$this->title = $model->SEQ_TANQUE_ESTOQUE;
$this->params['breadcrumbs'][] = ['label' => 'Tanque Estoques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanque-estoque-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SEQ_TANQUE_ESTOQUE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SEQ_TANQUE_ESTOQUE], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'SEQ_TANQUE_ESTOQUE',
            'COD_ESTOQUE',
            'COD_TANQUE',
        ],
    ]) ?>

</div>
