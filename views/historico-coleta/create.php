<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HistoricoColeta */

$this->title = 'Create Historico Coleta';
$this->params['breadcrumbs'][] = ['label' => 'Historico Coletas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historico-coleta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
