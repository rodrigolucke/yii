<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerfilMenu */

$this->title = 'Update Perfil Menu: ' . $model->SEQ_PERFIL_MENU;
$this->params['breadcrumbs'][] = ['label' => 'Perfil Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SEQ_PERFIL_MENU, 'url' => ['view', 'id' => $model->SEQ_PERFIL_MENU]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perfil-menu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
