<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LoteAnimais */

$this->title = 'Incluir Lote Animais';
$this->params['breadcrumbs'][] = ['label' => 'Lote Animais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lote-animais-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
