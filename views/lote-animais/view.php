<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LoteAnimais */

$this->title = $model->COD_LOTE_ANIMAIS;
$this->params['breadcrumbs'][] = ['label' => 'Lote Animais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lote-animais-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->COD_LOTE_ANIMAIS], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->COD_LOTE_ANIMAIS], [
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
            'COD_LOTE_ANIMAIS',
            'COD_ANIMAL',
        ],
    ]) ?>

</div>
