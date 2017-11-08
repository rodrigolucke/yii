<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LoteAnimais */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lote-animais-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'COD_ANIMAL')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
