<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace yii\componentes;


/**
 * Description of Funcoes
 *
 * @author teste
 */
class Funcoes {
    //put your code here
    
    
    public static function verificarSeUsuarioTemPermissaoNaUrl($controller){
		
		//$modulo = Yii::$app->id;
		 $usuario = new Usuario();
                 
                 var_dump('oi');die;
		if($usuario->verificarSeAdministrador( $controller ) ){
			return true;
		}
                $listaPermissoes =  Yii::$app->session->get('user.nomeUsuarioPermissoesAssumidas');
                
		
                var_dump($listaPermissoes);die;
                foreach ($listaPermissoes as $value){
                    
                }
		/*if( $listaPermissoes != null && $listaPermissoes->$modulo != null ){
			if( $listaPermissoes->$modulo->$controller != null ){		
				if( in_array( $actionRequerida, $listaPermissoes->$modulo->$controller ) ){				
				
					$posicaoDaActionNaListaDeActionsDisponiveis = array_search( $actionRequerida, $listaPermissoes->$modulo->$controller );
					$valorDaActionSendoAcessada = array_values($listaPermissoes->$modulo->$controller)[$posicaoDaActionNaListaDeActionsDisponiveis];
										
					
					
					return true;
				}
			}		
		}*/
		
		return false;
	}
}
