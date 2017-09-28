<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Animal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'COD_RACA')->textInput() ?>

    <?= $form->field($model, 'DT_NASCIMENTO')->textInput() ?>

    <?= $form->field($model, 'DT_FALECIMENTO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
