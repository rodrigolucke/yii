<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\MovimentoEstoque */
/* @var $form yii\widgets\ActiveForm */
?>



    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'QUANTIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COD_MOVIMENTO_ESTOQUE')->dropDownList(ArrayHelper::map(\app\models\TipoMovimentoEstoque::find()->all(), 'COD_TIPO_MOVIMENTO_ESTOQUE', 'DESCR'), ['prompt'=>'']) ?>

    <?= $form->field($model, 'COD_EMPRESA')->dropDownList(ArrayHelper::map(\app\models\Empresa::find()->all(), 'COD_EMPRESA', 'NOME_EMPRESA'), ['prompt'=>'']) ?>
    
    <?= $form->field($model, 'COD_ESTOQUE')->dropDownList(ArrayHelper::map(\app\models\Estoque::find()->all(), 'COD_ESTOQUE','LOCALIZACAO'), ['prompt'=>'']) ?>
    
    <label for="movimentoestoque-DATA_MOVIMENTO">Data Movimento</label>
    <input type="date" class="form-control" name="DATA_MOVIMENTO" id="DATA_VENDA" value="">   
   
    <div id="dataEntrega" >
    
        <label for="movimentoestoque-DATA_ENTREGA">Data Entrega</label>
        <input type="date" class="form-control" name="movimentoestoque-DATA_ENTREGA" id="movimentoestoque-DATA_ENTREGA" value="">  
    
    </div>
    <?= $form->field($model, 'PRECO_LITRO')->textInput(['maxlength' => true]) ?>

    

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">
	                        
  $(document).on("click","#movimentoestoque-cod_movimento_estoque",function() {
      alert('oi');
    	<?php if($model->COD_MOVIMENTO_ESTOQUE == 1){?>
                mostrarCampoDataEntrega();
        <?php }else{?>           
            escoonderCampoDataEntrega();
        <?php }?>   
    });
    

    function mostrarCampoDataEntrega(){
     $('#dataEntrega').show(); 
    }
    
    function escoonderCampoDataEntrega(){
     $('#dataEntrega').hide(); 
    }
                        
</script>