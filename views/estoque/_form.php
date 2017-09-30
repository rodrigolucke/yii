<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Estoque */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estoque-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CAPACIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESCR')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
