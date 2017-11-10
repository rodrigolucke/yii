<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LoteAnimal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lote-animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DESCR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COD_ANIMAL')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
