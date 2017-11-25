<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Venda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'COD_EMPRESA')->textInput() ?>

    <?= $form->field($model, 'PRECO_LITRO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QUANTIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_VENDA')->textInput() ?>

    <?= $form->field($model, 'DATA_ENTREGA')->textInput() ?>

    <?= $form->field($model, 'COD_MOVIMENTO_ESTOQUE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
