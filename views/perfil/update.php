<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Perfil */

$this->title = 'Update Perfil: ' . $model->COD_PERFIL;
$this->params['breadcrumbs'][] = ['label' => 'Perfils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_PERFIL, 'url' => ['view', 'id' => $model->COD_PERFIL]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perfil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
