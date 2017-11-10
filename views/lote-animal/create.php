<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LoteAnimal */

$this->title = 'Incluir Lote Animal';
$this->params['breadcrumbs'][] = ['label' => 'Lote Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lote-animal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
