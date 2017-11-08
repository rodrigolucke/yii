<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LoteAnimais */

$this->title = 'Update Lote Animais: ' . $model->COD_LOTE_ANIMAIS;
$this->params['breadcrumbs'][] = ['label' => 'Lote Animais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_LOTE_ANIMAIS, 'url' => ['view', 'id' => $model->COD_LOTE_ANIMAIS]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lote-animais-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
