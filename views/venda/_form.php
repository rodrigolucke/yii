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

    <?= $form->field($model, 'DT_VENDA')->textInput() ?>

    <?= $form->field($model, 'COD_MOVIMENTO_ESTOQUE')->textInput() ?>

    <?= $form->field($model, 'COD_PRECO_LEITE')->textInput() ?>

    <?= $form->field($model, 'COD_USUARIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
