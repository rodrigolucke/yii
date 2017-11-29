

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\Widget;

/* @var $this yii\web\View */
/* @var $model app\models\HistoricoColeta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historico-coleta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DATA_COLETA')->textInput() ?>
    

    <?= $form->field($model, 'QUANTIDADE')->textInput(['maxlength' => true ]) ?>

    <?= $form->field($model, 'COD_USUARIO')->textInput() ?>

    <?= $form->field($model, 'COD_LOTE_ANIMAIS')->textInput() ?>

    <?= $form->field($model, 'COD_LOTE')->textInput() ?>

    <?= $form->field($model, 'COD_MOVIMENTO_ESTOQUE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<script type="text/javascript">
	
</script>                