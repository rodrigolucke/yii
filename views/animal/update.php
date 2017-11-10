<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Animal */

$this->title = 'Update Animal: ' . $model->COD_ANIMAL;
$this->params['breadcrumbs'][] = ['label' => 'Animais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_ANIMAL, 'url' => ['view', 'id' => $model->COD_ANIMAL]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="animal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
