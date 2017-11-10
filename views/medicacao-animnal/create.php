<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MedicacaoAnimal */

$this->title = 'Incluir Medicação Animal';
$this->params['breadcrumbs'][] = ['label' => 'Medicação Animais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medicacao-animal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
