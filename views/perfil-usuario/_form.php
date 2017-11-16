<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PerfilUsuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfil-usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'COD_PERFIL')->textInput() ?>

    <?= $form->field($model, 'COD_USUARIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
