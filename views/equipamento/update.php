<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Equipamento */

$this->title = 'Editar Equipamento: ' . $model->COD_EQUIPAMENTO;
$this->params['breadcrumbs'][] = ['label' => 'Equipamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_EQUIPAMENTO, 'url' => ['view', 'id' => $model->COD_EQUIPAMENTO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="equipamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
