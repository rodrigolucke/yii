<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HistoricoColeta */

$this->title = 'Editar Historico Coleta: ' . $model->COD_HISTORICO_COLETA;
$this->params['breadcrumbs'][] = ['label' => 'Historico Coletas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_HISTORICO_COLETA, 'url' => ['view', 'id' => $model->COD_HISTORICO_COLETA]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="historico-coleta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
