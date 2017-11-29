<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perfil Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Incluir Perfil Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SEQ_PERFIL_MENU',
            
            [
                'attribute' => 'COD_PERFIL',
                'value' => 'cODPERFIL.DESCR',    
               // 'filter'=> Html::activeDropDownList( 'COD_PERFIL', ArrayHelper::map(\app\models\Perfil::find()->orderBy('DESCR ASC')->all(), 'COD_PERFIL', 'DESCR'), ['class' => 'form-control', 'prompt' => ''])
             ],
            [
                'attribute' => 'COD_MENU',
                'value' => 'cODMENU.DESCR',    
               // 'filter'=> Html::activeDropDownList( 'COD_PERFIL', ArrayHelper::map(\app\models\Perfil::find()->orderBy('DESCR ASC')->all(), 'COD_PERFIL', 'DESCR'), ['class' => 'form-control', 'prompt' => ''])
             ],            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
