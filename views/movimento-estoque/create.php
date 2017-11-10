<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MovimentoEstoque */

$this->title = 'Incluir Movimento Estoque';
$this->params['breadcrumbs'][] = ['label' => 'Movimento Estoques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimento-estoque-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
