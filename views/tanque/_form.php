<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Tanque */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanque-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CAPACIDADE')->textInput(['maxlength' => true]) ?>
    
     <?= $form->field($model, 'COD_STATUS')->dropDownList(ArrayHelper::map(\app\models\Status::find()->all(), 'COD_STATUS', 'DESCRICAO'), ['prompt'=>'']) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
