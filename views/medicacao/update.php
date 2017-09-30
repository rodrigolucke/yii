<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Medicacao */

$this->title = 'Update Medicacao: ' . $model->COD_MEDICACAO;
$this->params['breadcrumbs'][] = ['label' => 'Medicacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_MEDICACAO, 'url' => ['view', 'id' => $model->COD_MEDICACAO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medicacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
