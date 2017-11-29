<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\PerfilMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfil-menu-form">

    <?php $form = ActiveForm::begin(); ?>

   

    
    
     <?= $form->field($model, 'COD_PERFIL')->dropDownList(ArrayHelper::map(\app\models\Perfil::find()->all(), 'COD_PERFIL', 'DESCR'), ['prompt'=>'']) ?>

     <?= $form->field($model, 'COD_MENU')->dropDownList(ArrayHelper::map(\app\models\Menu::find()->all(), 'COD_MENU', 'DESCR'), ['prompt'=>'']) ?>
  


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Salvar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
