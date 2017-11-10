<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PrecoLeite */

$this->title = $model->COD_PRECO_LEITE;
$this->params['breadcrumbs'][] = ['label' => 'Preco Leites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preco-leite-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->COD_PRECO_LEITE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->COD_PRECO_LEITE], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja deletar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'COD_PRECO_LEITE',
            'PRECO_LITRO',
            'DT_ATUALIZACAO',
            'COD_USUARIO',
        ],
    ]) ?>

</div>
