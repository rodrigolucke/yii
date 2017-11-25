<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DESCR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ARQUIVO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COD_USUARIO')->textInput() ?>

    <?= $form->field($model, 'COD_PERFIL')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
