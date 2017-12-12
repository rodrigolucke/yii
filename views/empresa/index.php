<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empresas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empresa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Inserir Empresa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_EMPRESA',
            'NOME_EMPRESA',
            'CNPJ',
           
            
            [
                'attribute' => 'COD_ENDERECO',
                'value' => 'cODENDERECO.RUA' ,    
               // 'filter'=> Html::activeDropDownList( 'COD_PERFIL', ArrayHelper::map(\app\models\Perfil::find()->orderBy('DESCR ASC')->all(), 'COD_PERFIL', 'DESCR'), ['class' => 'form-control', 'prompt' => ''])
             ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
