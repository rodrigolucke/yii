<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\MovimentoEstoque */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimento-estoque-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'COD_MOVIMENTO_ESTOQUE')->dropDownList(ArrayHelper::map(\app\models\TipoMovimentoEstoque::find()->all(), 'COD_TIPO_MOVIMENTO_ESTOQUE', 'DESCR'), ['prompt'=>'']) ?>

    <?= $form->field($model, 'DATA_HISTORICO')->textInput(getdate()) ?>
    
    <?= $form->field($model, 'COD_ESTOQUE')->dropDownList(ArrayHelper::map(\app\models\Estoque::find()->all(), 'COD_ESTOQUE', 'DESCRICAO'), ['prompt'=>'']) ?>
   
     <p>
        <?= Html::a('Cadastrar Tipo Movimento Estoque', ['tipo-movimento-estoque/create'], ['class' => 'btn btn-info']) ?>
    </p>
    
     <p>
        <?= Html::a('Cadastrar Estoque', ['estoque/create'], ['class' => 'btn btn-info']) ?>
    </p>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
