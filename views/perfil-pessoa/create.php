<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PerfilPessoa */

$this->title = 'Incluir Perfil Pessoa';
$this->params['breadcrumbs'][] = ['label' => 'Perfil Pessoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-pessoa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
