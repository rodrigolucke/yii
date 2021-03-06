<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tanque */

$this->title = $model->COD_TANQUE;
$this->params['breadcrumbs'][] = ['label' => 'Tanques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanque-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->COD_TANQUE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->COD_TANQUE], [
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
            'COD_TANQUE',
            'CAPACIDADE',
            'COD_STATUS',
        ],
    ]) ?>

</div>
