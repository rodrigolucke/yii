<?php

namespace app\controllers;

class RelatorioVendaController extends \yii\web\Controller
{
    public function actionRelatorioVenda()
    {
        
        if(isset($_POST['dataIni']) &&  $_POST['dataIni'] != ''){
             return $this->render('relatorioVenda'); 
        }else{
             return $this->render('relatorio-venda'); 
        }
      
    }

}
