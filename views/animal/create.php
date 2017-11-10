<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Animal */

$this->title = 'Incluir Animal';
$this->params['breadcrumbs'][] = ['label' => 'Animais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
