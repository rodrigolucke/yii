<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LoteEquipamentos */

$this->title = 'Create Lote Equipamentos';
$this->params['breadcrumbs'][] = ['label' => 'Lote Equipamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lote-equipamentos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
