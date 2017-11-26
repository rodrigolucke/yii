<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perfil Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perfil Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SEQ_PERFIL_PESSOA',     
            
             [
                'attribute' => 'COD_PERFIL',
                'value' => 'cODPERFIL.DESCR',    
               // 'filter'=> Html::activeDropDownList( 'COD_PERFIL', ArrayHelper::map(\app\models\Perfil::find()->orderBy('DESCR ASC')->all(), 'COD_PERFIL', 'DESCR'), ['class' => 'form-control', 'prompt' => ''])
             ],

            [
             'attribute' => 'COD_USUARIO',
              'value' => 'cODUSUARIO.USUARIO',
           ],
                
         ],
    ]); ?>
</div>
