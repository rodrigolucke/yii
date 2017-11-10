<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PrecoLeite */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="preco-leite-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PRECO_LITRO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DT_ATUALIZACAO')->textInput() ?>

    <?= $form->field($model, 'COD_USUARIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
