<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PerfilMenu */

$this->title = 'Create Perfil Menu';
$this->params['breadcrumbs'][] = ['label' => 'Perfil Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
