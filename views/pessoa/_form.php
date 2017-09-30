<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CPF')->textInput(['maxlength' => true]) ?>
    
    
    <?= $form->field($model, 'COD_ENDERECO')->dropDownList(ArrayHelper::map(\app\models\Endereco::find()->all(), 'COD_ENDERECO', 'RUA'), ['prompt'=>'']) ?>
   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
