<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PerfilMenu */

$this->title = $model->SEQ_PERFIL_MENU;
$this->params['breadcrumbs'][] = ['label' => 'Perfil Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-menu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->SEQ_PERFIL_MENU], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->SEQ_PERFIL_MENU], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja deletar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'SEQ_PERFIL_MENU',
            'COD_PERFIL',
            'COD_MENU',
        ],
    ]) ?>

</div>
