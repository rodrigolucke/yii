<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\componentes;


/**
 * Description of Funcoes
 *
 * @author teste
 */
class Funcoes {
    //put your code here
    
    
    public static function verificarSeUsuarioTemPermissaoNaUrl($controller){
		
		//$modulo = Yii::$app->id;
		 $usuario = new \app\models\Usuario();
                 
               
		if($usuario->verificarSeAdministrador( $controller ) ){
			return true;
		}
              
                $listaPermissoes =  \Yii::$app->session->get('user.nomeUsuarioPermissoesAssumidas');
                
                foreach ($listaPermissoes as $value){
                    
                }
		
		return false;
	}
}
