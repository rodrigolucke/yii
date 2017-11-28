<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedicacaoAnimal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medicacao-animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'COD_MEDICACAO')->textInput() ?>

    <?= $form->field($model, 'COD_ANIMAL')->textInput() ?>

    <?= $form->field($model, 'DATA_APLICACAO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
