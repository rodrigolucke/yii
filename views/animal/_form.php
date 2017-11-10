<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Animal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-form">

    <?php $form = ActiveForm::begin(); ?>

   
    
    <?= $form->field($model, 'COD_RACA')->dropDownList(ArrayHelper::map(\app\models\Raca::find()->all(), 'COD_RACA', 'DESCRICAO'), ['prompt'=>'']) ?>
    <p>
        <?= Html::a('Cadastrar Raça', ['raca/create'], ['class' => 'btn btn-info']) ?>
    </p>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Salvar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
