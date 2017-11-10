<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PrecoLeite */

$this->title = 'Editar Preco Leite: ' . $model->COD_PRECO_LEITE;
$this->params['breadcrumbs'][] = ['label' => 'Preco Leite', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_PRECO_LEITE, 'url' => ['view', 'id' => $model->COD_PRECO_LEITE]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="preco-leite-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
