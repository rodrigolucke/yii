<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Venda */

$this->title = 'Update Venda: ' . $model->COD_VENDA;
$this->params['breadcrumbs'][] = ['label' => 'Vendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_VENDA, 'url' => ['view', 'id' => $model->COD_VENDA]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="venda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
