<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Endereco */

$this->title = 'Alterar Endereço: ' . $model->COD_ENDERECO;
$this->params['breadcrumbs'][] = ['label' => 'Enderecos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_ENDERECO, 'url' => ['view', 'id' => $model->COD_ENDERECO]];
$this->params['breadcrumbs'][] = 'Salvar';
?>
<div class="endereco-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
