<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LoteAnimal */

$this->title = 'Editar Lote Animal: ' . $model->COD_LOTE_ANIMAL;
$this->params['breadcrumbs'][] = ['label' => 'Lote Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_LOTE_ANIMAL, 'url' => ['view', 'id' => $model->COD_LOTE_ANIMAL]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="lote-animal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
