<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoMovimentoEstoque */

$this->title = 'Create Tipo Movimento Estoque';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Movimento Estoques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-movimento-estoque-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
