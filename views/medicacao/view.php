<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Medicacao */

$this->title = $model->COD_MEDICACAO;
$this->params['breadcrumbs'][] = ['label' => 'Medicacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medicacao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->COD_MEDICACAO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->COD_MEDICACAO], [
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
            'COD_MEDICACAO',
            'DESCR',
        ],
    ]) ?>

</div>
