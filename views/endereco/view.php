<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Endereco */

$this->title = $model->COD_ENDERECO;
$this->params['breadcrumbs'][] = ['label' => 'Enderecos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="endereco-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->COD_ENDERECO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->COD_ENDERECO], [
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
            'COD_ENDERECO',
            'RUA',
            'NUMERO',
            'BAIRRO',
            'CIDADE',
            'CEP',
        ],
    ]) ?>

</div>
