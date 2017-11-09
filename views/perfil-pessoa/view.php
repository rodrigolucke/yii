<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PerfilPessoa */

$this->title = $model->SEQ_PERFIL_PESSOA;
$this->params['breadcrumbs'][] = ['label' => 'Perfil Pessoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-pessoa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SEQ_PERFIL_PESSOA], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SEQ_PERFIL_PESSOA], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'SEQ_PERFIL_PESSOA',
            'COD_PERFIL',
            'COD_PESSOA',
        ],
    ]) ?>

</div>
