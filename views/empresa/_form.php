<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Empresa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOME_EMPRESA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CNPJ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COD_ENDERECO')->dropDownList(ArrayHelper::map(\app\models\Endereco::find()->all(), 'COD_ENDERECO', 'RUA'), ['prompt'=>'']) ?>
    <p>
        <?= Html::a('Cadastrar Endereço', ['endereco/create'], ['class' => 'btn btn-info']) ?>
    </p>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
