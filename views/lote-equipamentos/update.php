<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LoteEquipamentos */

$this->title = 'Update Lote Equipamentos: ' . $model->COD_LOTE;
$this->params['breadcrumbs'][] = ['label' => 'Lote Equipamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_LOTE, 'url' => ['view', 'id' => $model->COD_LOTE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lote-equipamentos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
