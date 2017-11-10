<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Raca */

$this->title = $model->COD_RACA;
$this->params['breadcrumbs'][] = ['label' => 'Racas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raca-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->COD_RACA], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->COD_RACA], [
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
            'COD_RACA',
            'DESCRICAO',
        ],
    ]) ?>

</div>
