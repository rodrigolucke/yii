<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\MedicacaoAnimal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medicacao-animal-form">

    <?php $form = ActiveForm::begin(); ?>
   
    
    <?= $form->field($model, 'COD_MEDICACAO')->dropDownList(ArrayHelper::map(\app\models\Medicacao::find()->all(), 'COD_MEDICACAO', 'DESCR'), ['prompt'=>'']) ?>

     <?= $form->field($model, 'COD_ANIMAL')->dropDownList(ArrayHelper::map(\app\models\Animal::find()->all(), 'COD_ANIMAL', ''), ['prompt'=>'']) ?>    

    <?= $form->field($model, 'DATA_APLICACAO')->textInput() ?>
    
    <p>
        <?= Html::a('Cadastrar Medicação', ['medicacao/create'], ['class' => 'btn btn-info']) ?>
    </p>
    <p>
        <?= Html::a('Cadastrar Animal', ['animal/create'], ['class' => 'btn btn-info']) ?>
    </p>
    
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
