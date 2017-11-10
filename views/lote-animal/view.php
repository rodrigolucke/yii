<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LoteAnimal */

$this->title = $model->COD_LOTE_ANIMAL;
$this->params['breadcrumbs'][] = ['label' => 'Lote Animais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lote-animal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->COD_LOTE_ANIMAL], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->COD_LOTE_ANIMAL], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja excluir este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'COD_LOTE_ANIMAL',
            'DESCR',
            'COD_ANIMAL',
        ],
    ]) ?>

</div>
