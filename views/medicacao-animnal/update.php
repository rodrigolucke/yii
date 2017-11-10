<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MedicacaoAnimal */

$this->title = 'Editar Medicacao Animal: ' . $model->COD_MEDICACAO_ANIMAL;
$this->params['breadcrumbs'][] = ['label' => 'Medicacao Animais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_MEDICACAO_ANIMAL, 'url' => ['view', 'id' => $model->COD_MEDICACAO_ANIMAL]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medicacao-animal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
