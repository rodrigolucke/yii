<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovimentoEstoque */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimento-estoque-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TIPO_MOVIMENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_HISTORICO')->textInput() ?>

    <?= $form->field($model, 'COD_ESTOQUE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
