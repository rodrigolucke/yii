<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Medicacao */

$this->title = 'Create Medicacao';
$this->params['breadcrumbs'][] = ['label' => 'Medicacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medicacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
