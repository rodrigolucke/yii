<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MedicacaoAnimal */

$this->title = 'Create Medicacao Animal';
$this->params['breadcrumbs'][] = ['label' => 'Medicacao Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medicacao-animal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
