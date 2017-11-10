<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Endereco */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="endereco-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RUA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMERO')->textInput() ?>

    <?= $form->field($model, 'BAIRRO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CEP')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
