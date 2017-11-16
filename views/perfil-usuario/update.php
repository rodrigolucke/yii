<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerfilUsuario */

$this->title = 'Update Perfil Usuario: ' . $model->SEQ_PERFIL_PESSOA;
$this->params['breadcrumbs'][] = ['label' => 'Perfil Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SEQ_PERFIL_PESSOA, 'url' => ['view', 'id' => $model->SEQ_PERFIL_PESSOA]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perfil-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
