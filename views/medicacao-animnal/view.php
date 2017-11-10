<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MedicacaoAnimal */

$this->title = $model->COD_MEDICACAO_ANIMAL;
$this->params['breadcrumbs'][] = ['label' => 'Medicacao Animais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medicacao-animal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->COD_MEDICACAO_ANIMAL], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->COD_MEDICACAO_ANIMAL], [
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
            'COD_MEDICACAO_ANIMAL',
            'COD_MEDICACAO',
            'COD_ANIMAL',
        ],
    ]) ?>

</div>
