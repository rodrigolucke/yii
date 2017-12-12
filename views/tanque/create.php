<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tanque */

$this->title = 'Create Tanque';
$this->params['breadcrumbs'][] = ['label' => 'Tanques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanque-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
