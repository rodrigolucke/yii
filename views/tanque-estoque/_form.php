<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TanqueEstoque */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanque-estoque-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'COD_ESTOQUE')->dropDownList(ArrayHelper::map(\app\models\Estoque::find()->all(), 'COD_ESTOQUE', 'DESCR'), ['prompt'=>'']) ?>
    
     <?= $form->field($model, 'COD_TANQUE')->dropDownList(ArrayHelper::map(\app\models\Tanque::find()->all(), 'COD_TANQUE', 'Capacidade'), ['prompt'=>'']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
