<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HistoricoColeta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historico-coleta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DATA_COLETA')->textInput() ?>

    <?= $form->field($model, 'QUANTIDADE_COLETA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'COD_USUARIO')->textInput() ?>

    <?= $form->field($model, 'COD_LOTE_ANIMAL')->textInput() ?>

    <?= $form->field($model, 'COD_LOTE_EQUIPAMENTO')->textInput() ?>

    <?= $form->field($model, 'COD_MOVIMENTO_ESTOQUE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
