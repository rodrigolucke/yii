<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Raca */

$this->title = 'Incluir Raca';
$this->params['breadcrumbs'][] = ['label' => 'Racas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raca-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
